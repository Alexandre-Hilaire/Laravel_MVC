<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class MeowController extends Controller
{
// * Début du CRUD

    public function create(){
        return view('createMeow');
    }

    public function index(){
        $meows = Post::all();
            return view('meows', ['meows' => $meows]);
    }
    public function show(Post $meow){
        // if (Gate::allows('read-post', $meow)){
        return view('meowDetails',['meow' => $meow]);
        // }
        // else {
        //     return "vous n'êtes pas autorisé car vous n'êtes pas l'auteur";
        // }
    }
    public function update(Request $request, Post  $id){
        if (Gate::allows('isAuthor', $id)){
            return view('updateMeowView');
        }
        else {
            return "Vous n'êtes pas l'auteur, vous n'avez pas le droit de modifier ce meow";
        }
    }
    public function destroy(Post $meow){
        $meow->delete();
        return redirect(route('meows.index'));
    }
}