<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        dd($_POST);
        dd($request);
//        return view("diary",['status'=>'hidden']);
        return redirect('/main');
    }
}
