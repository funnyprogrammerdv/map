<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\myuser;

class myusersController extends Controller
{
    public function addusers(Request $userr){
    $user = new myuser();
    $user->login = $userr->input('login');
    $user-> password = $userr->input('password');

    $user->save();
    return redirect('/autoriz');


    } 
}
