<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post, Request $request){
        // dd($request->all());
        Comment::create([
            'user_id' => request('user_id'),
            'body' => request('body'),
            'post_id' => $post->id
            ]);
            
        return back();
    }
}

