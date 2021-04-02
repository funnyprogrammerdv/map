<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;
use App\Models\myuser;


class AuthController extends Controller
{
 

    public function postLogin(Request $request){
       
         $formFilds = $request->only(['login','password']);

            if(Auth::attempt($formFilds)){
              return redirect()->intended('mainapp');
            
          }
        return redirect('/autoriz');
}

}