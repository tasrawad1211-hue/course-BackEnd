<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Types_of_coffeController extends Controller
{
   public function result()
   {
    return view('Types of coffe');
   } 
   public function index()
   {
      $products=[
         'lap',
         'mop',
         'tel'
      ];
      return view('Types of coffe', ['products' => $products]);
   }
}
