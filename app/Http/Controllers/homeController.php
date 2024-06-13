<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',['users'=> $users]);
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('users.detail',['user'=>$user]);
    }
}
