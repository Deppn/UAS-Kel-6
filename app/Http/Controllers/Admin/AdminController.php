<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{ 
    public function view_category()
    {
        return view('admin.category');
    }
    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        session()->flash('toastr', 'Category added successfully');

        return redirect()->back();
    }
}
