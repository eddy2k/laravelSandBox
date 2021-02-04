<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function addUser(string $email, string $name = 'kein name')
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = 'asd';
        $user->save();
    }

    public function show()
    {
        dd(User::get());
    }
}