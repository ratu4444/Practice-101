<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   public function welcome()

   {
      $name = 'Imran';
      return view('layouts.welcomevai', compact('name'));
   }
}