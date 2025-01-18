<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // This is the method that will be called when the user navigates to /user
    public function user(){
        return "Hello from user controller";
    }

    // This is the method that will be called when the user navigates to /user/name
    // public function userName($name){
    //     return "Hello from user controller, $name";
    // }

    // This is the method that will be called when the user navigates to /user/name to view
    public function view($name){
        return view('user', ['name' => $name]);
    }
}
