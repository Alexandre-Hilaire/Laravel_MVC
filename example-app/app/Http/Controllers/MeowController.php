<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MeowController extends Controller
{
    public function show(){
        $meows = Post::all();
        return view('meows-list', ['meows' => $meows]);
    }
    public function show_one(string $id){
        $meow = Post::find($id);
        return view('meow-details',['meow' => $meow]);
    }
}