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
    public function store(Request $request){
        Post::create([
            $request->validate([
                'message'=>'required|max:300',
            ]),
            'user_id' => $request->user()->id,
            'message' => $request->message,    
        ]);
        return redirect(route('meows.index'));
    }

    public function index(){
        $meows = Post::all();
            return view('meows', ['meows' => $meows]);
    }
    public function show(Post $meow){
        return view('meowDetails',['meow' => $meow]);
    }
    public function edit(Request $request, Post  $meow){
        return view('updateMeow', ['meow' => $meow]);
    }
    public function update(Request $request, Post  $meow){
        if (Gate::allows('isAuthor', $meow)){
            $request->validate([
                'message'=>'required|max:300',
            ]);
            $meow->update($request->all());
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