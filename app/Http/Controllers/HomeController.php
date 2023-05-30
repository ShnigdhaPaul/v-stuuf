<?php

namespace App\Http\Controllers;

use App\Models\rentProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $products = rentProduct::paginate(10);
    return view ('home',compact('products'));
   }
   public function about()
   {
    return view ('about');
   }

}
