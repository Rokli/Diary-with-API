<?php

namespace App\Models;

class User
{
    private $user =[
        'email',
        'password'
        ];
    function __construct($email,$password)
    {
        setcookie('email',$email);
        setcookie('password',$password);
        $this->user['email'] = $email;
        $this->user['password'] = $password;
    }
    public function GetEmail(){
        return $this->user['email'];
    }
    public function GetPassword(){
        return $this->user['password'];
    }
}
