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

//plukبتجيب عامود واحد من عدة اعمدة و غيت فيها تلقائيا 
//first  بجيب شغلة وحدة يعني مثلا اول منتج ضفتو
//limit    بجيب عدد من المنتجات مثلا بدي 5 منتجات