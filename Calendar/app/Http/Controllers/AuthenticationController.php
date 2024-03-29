<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $user = new User($_POST['email'],$_POST['password']);
        dd($_COOKIE['password']);
    }
}
