<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        return view('home');
 }
 public function service(){
    return view('service');
}
public function team(){
    return view('team');
}
}