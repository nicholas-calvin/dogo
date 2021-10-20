<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function createPost(Request $request){
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/home');
    }

    public function discussionPage($id){
        $post = Post::find($id);
        $post->username = $post->creator->username;
        return view('discussionPage', compact('post'));
    }

}
