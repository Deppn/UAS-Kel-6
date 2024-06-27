<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class homeController extends Controller
{
    //
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('home.index', compact('products')); // Pass the products to the view
    }
    
    public function login_home()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('home.index', compact('products')); // Pass the products to the view
    }
}
