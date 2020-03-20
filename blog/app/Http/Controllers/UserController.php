<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  //add
  public function index()
  {
    return view('user');
  }

}
