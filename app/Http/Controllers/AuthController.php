<?php

namespace App\Http\Controllers;

use App\Events\NewUserRegistered;
use App\Jobs\ForgotPasswordJob;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function logout()
    {
        auth("web")->logout();
        return redirect(route("login"));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)){
            return redirect(route("home"));
        }

        return redirect(route('login'))->withErrors(["email"=>"Пользователь не найден, либо данные введены неправильно"]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string","unique:users,email"],
            "password" => ["required","confirmed"]
        ]);

        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data['password']),
        ]);
        if($user){
            auth("web")->login($user);
        }
        // call an event
//        event(new NewUserRegistered($request));

        //call a queue
//        $this->dispatch(new ForgotPasswordJob(collect($request)));
//        dispatch(new ForgotPasswordJob($request));
//        ForgotPasswordJob::dispatch($request);

        return redirect(route('home'));
    }
}
