<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
        $product = Product::all();
        return view('admin.view_product',compact('product'));
    }
    public function delete_product($id)
    {
        $data = product::find($id);

        $data->delete();

        return redirect()->back();
    }
}