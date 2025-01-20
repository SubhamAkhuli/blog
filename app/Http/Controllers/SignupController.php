<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    //
    function getUserData(Request $request){
        // return $request;
        echo " User name is: $request->name";
        echo"<br/>";
        echo " User Email id is : $request->email";
    }
}
