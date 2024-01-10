<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class MeowController extends Controller
{
    public function show(){
        $meows = Post::all();
        return view('meows-list', ['meows' => $meows]);
    }
    public function show_one(string $id){
        $meow = Post::find($id);
        if (Gate::allows('read-post', $meow)){
        return view('meow-details',['meow' => $meow]);
        }
        else {
            return "vous n'êtes pas autorisé car vous n'êtes pas l'auteur";
        }
    }
}