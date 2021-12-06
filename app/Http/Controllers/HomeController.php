<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::where('home_ten','=',1)->take(10)->get();

        return view('home',[
            'products' => $products
        ]);
    }
}
