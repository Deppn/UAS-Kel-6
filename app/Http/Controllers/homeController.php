<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        $user = Auth::user();
        if($user) {
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        } else {
            $count = 0;
        }
        
        return view('home.index', compact('products', 'count')); // Pass the products to the view
    }
    
    public function login_home()
    {
        $products = Product::all(); // Fetch all products from the database
        $user = Auth::user();
        if($user) {
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        } else {
            $count = 0;
        }
        
        return view('home.index', compact('products', 'count')); // Pass the products to the view
    }

    public function add_cart($id) {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;

        $data->save();  

        toastr()->success('Products Added to the cart Successfully');

        return redirect()->back();
    }
}
