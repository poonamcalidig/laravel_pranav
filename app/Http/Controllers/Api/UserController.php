<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addNewUser(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);

        return "User created";
    }
}
