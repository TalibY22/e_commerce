<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\models\product;
use \app\models\cart;

class MainController extends Controller
{
    function show_products(){

      $products = product::all();



    }

    
    
    
    
    
    
    
    
    
    function add_to_cart($id){

      $product =  product::where('ProductID',$id) -> get();
      $customer = Auth::user();

      if ($product){

         $cart = new cart();
         $cart -> CustomerID=customer -> id;
         $cart -> ProductID = $id;
         $cart -> save();

      }

     

    }

}
