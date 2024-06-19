<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password berhasil diubah');
    }

    public function showChangePasswordForm()
    {
        return view('user.change_password');
    }

    public function changeName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return back()->with('success', 'Nama berhasil diubah');
    }
    public function showChangeNameForm()
{
    return view('user.change_name');
}

    public function deleteUser(Request $request)
    {
        $user = Auth::user();
        $user->delete();

        return redirect()->route('home')->with('success', 'Akun berhasil dihapus');
    }
     
     public function listMenus()
     {
         $menus = Menu::all();
         return view('user.list_menus', compact('menus'));
     }
 
     public function showAddMenuForm()
     {
         return view('user.add_menu');
     }
 
     public function addMenu(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'url' => 'required|string|max:255',
         ]);
 
         Menu::create($request->only('name', 'url'));
 
         return redirect()->route('user.list-menus')->with('success', 'Menu berhasil ditambahkan');
     }
 
     public function showEditMenuForm(Menu $menu)
     {
         return view('user.edit_menu', compact('menu'));
     }
 
     public function editMenu(Request $request, Menu $menu)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'url' => 'required|string|max:255',
         ]);
 
         $menu->update($request->only('name', 'url'));
 
         return redirect()->route('user.list-menus')->with('success', 'Menu berhasil diubah');
     }
 
     public function deleteMenu(Menu $menu)
     {
         $menu->delete();
 
         return redirect()->route('user.list-menus')->with('success', 'Menu berhasil dihapus');
     }
 }



