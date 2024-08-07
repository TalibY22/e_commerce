<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\product;

class MainController extends Controller
{
    function show_products(){

      $products = product::all();

      

    }
}
