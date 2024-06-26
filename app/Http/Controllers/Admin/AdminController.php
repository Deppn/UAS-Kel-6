<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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

}
