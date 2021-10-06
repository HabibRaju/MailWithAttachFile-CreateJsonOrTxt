<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        foreach($users as $user){
            echo $user->id . ' -- ' . $user->name .' -- '.$user->email . "<br>";
        }

    }

    
}
