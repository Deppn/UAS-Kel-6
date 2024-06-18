<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    // Menampilkan list products
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    
    public function create()
    {
        //
    }

    // Menampilkan produk yang baru di CREATE dalam storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return response()->json($product, 201);
    }

    // Menampilkan product yang dipillih
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    
    public function edit($id)
    {
        //
    }

    // Mengupdate specified product dalam storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return response()->json($product);
    }

    // Men DELETE product yang dipilih dari storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product has beeen deleted successfully']);
    }
}
