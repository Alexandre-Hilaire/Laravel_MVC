<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        return view('home');
    }
    public function show_one($id){
        return view('meow'.$id);
    }
}
