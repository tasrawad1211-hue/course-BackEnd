<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
   public function indexx()
   {
      $cars=[
        "cars1"=>["name"=>"BMW","price"=>"10000"],
        "cars2"=>["name"=>"MERCEDES","price"=>"20000"],
        "cars3"=>["name"=>"TOYOTA","price"=>"30000"],
      ];
      return view('cars', ['cars' => $cars]);
   }
}
