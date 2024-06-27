<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

class AdminController extends Controller
{ 
    public function view_category()
    {   
        $data = category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        session()->flash('toastr', 'Category added successfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        if ($data) {
            $data->delete();
            session()->flash('toastr', 'Category deleted successfully');
        } else {
            session()->flash('toastr', 'Category not found');
        }

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        session()->flash('toastr', 'Category updated successfully');

        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = category::all();
        return view ('admin.add_product',compact('category'));
    }
    public function upload_product(request $request)
    {
        $data = new product;

        $data-> title=$request->title;
        $data-> description=$request->description;
        $data-> price=$request->price;
        $data-> quantity=$request->qty;
        $data-> category=$request->category;
        $image=$request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            
            $request->image->move('products',$imagename);

            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function view_product ()
    {
        $product = Product::paginate(3);
        return view('admin.view_product',compact('product'));
    }
    public function delete_product($id)
    {
        $data = product::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function update_product($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.update_page',compact('data','category'));
    }
    public function edit_product(Request $request,$id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;
        

        if($image)
        {
    $imagename = time().'.'.$image->GetClientOriginalExtension();

    $request->image->move('products',$imagename);

    $data->image = $imagename;

        }
        $data->save();
        return redirect('/view_product');

    }
    public function Cart()
{
    $userId = auth()->id();
    $cart = Cart::with('product')->where('user_id', $userId)->get();
    return view('cart', compact('cart'));
}

public function addToCart(Request $request)
{
    $userId = auth()->id();
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1);

    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    $cartItem = Cart::where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();

    if ($cartItem) {
        // Update quantity if product is already in the cart
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        // Add new item to the cart
        Cart::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => $quantity,
        ]);
    }

    // Calculate the total quantity
    $totalQuantity = Cart::where('user_id', $userId)->sum('quantity');
    return response()->json(['message' => 'Cart updated', 'cartCount' => $totalQuantity], 200);
}

public function deleteItem(Request $request)
{
    $userId = auth()->id();
    $productId = $request->input('id');

    $cartItem = Cart::where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();

    if ($cartItem) {
        $cartItem->delete();
        session()->flash('success', 'Product successfully deleted.');
    }

    return redirect()->back();
}
}