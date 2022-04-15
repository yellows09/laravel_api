<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class UserController extends Controller
{
    public function forgotPassword(\Illuminate\Foundation\Auth\User $user, Request $request)
    {
        return view('forgotPassword');
    }

    public function forgotPasswordProcess(Request $request)
    {
//        $newPassword = \Illuminate\Support\Str::random(10);
        $newPassword = \Illuminate\Support\Str::random(10);
        $checkEmail = User::where('email', '=', $request->email)->first();
        User::where('email','=',$request->email)->update(['password'=>bcrypt($newPassword)]);
        if ($checkEmail !== null) {
            Mail::send(['text' => 'restorePasswordEmail'], ['name', 'New password'], function ($message) {
                $message->to(\request()->email, 'New password')->subject('Новый пароль!');
                $message->from('efremovsergey09@gmail.com', 'New password');
            });
            return view('restorePassword', ['newPassword' => $newPassword]);
        } else {
            return view('failRestorePassword', ['email' => $request->email]);
        }
    }
}
