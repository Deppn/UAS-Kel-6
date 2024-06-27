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
        $product = Product::all();
        return view('home.index', compact('product'));
    }

    public function login_home() {
        $product = Product::all();
        return view('home.index', compact('product'));
    }
}
