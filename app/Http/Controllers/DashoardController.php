<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashoardController extends Controller
{
  public function index(){
      $data = "a";

      return view('welcome', compact('data'));
  }
}
