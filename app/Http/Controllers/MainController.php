<?php

namespace App\Http\Controllers;

use App\Providers\DateCheckServiceProvider;
use Illuminate\Http\Request;
use App\Services\DateCheck;
use DateService;
class MainController extends Controller
{
    public function index(){
        $ext = new DateCheck();
//        dump($ext->isValid('25/01/2016'));
        dump(DateService::isValid('25/01/2016'));
        return view('index');
    }
}
