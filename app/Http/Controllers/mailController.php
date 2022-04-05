<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMail()
    {
        Mail::send(['text'=>'mail'],['name','Web dev blog'], function ($message){
            $message->to('efremovsergey09@gmail.com','Laravel api test project1')->subject('Вы создали аккаунт!');
            $message->from('efremovsergey09@gmail.com','Laravel api test project');
        });
    }
}
