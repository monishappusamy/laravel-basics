<?php

/**
 * Created by PhpStorm.
 * User: Monish
 * Date: 3/19/16
 * Time: 3:05 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    /**
     * @param Request $request
     */
    public function postSignUp(Request $request){
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request){

    }
}