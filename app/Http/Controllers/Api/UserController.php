<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addNewUser(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return "User created";
    }

    public function collection()
    {
        $collection = collect([1, 2, 3, 4, 5, 6]);
        $collection2 = [1, 2, 3, 4];
        dd($collection2);
    }

    public function getAllUsers()
    {
        // dd(User::get()->toArray());
        // $jsonData = User::get()->pluck('id')->toJson();
        // dd(json_decode($jsonData));
        $users = DB::table('users')->paginate();
        return $users;
    }
}
