<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new comment();
        $comment->body = $request->input("body");
        $comment->posts_id = $request->input("post_id");
        $comment->users_id = Auth::id();//現在のユーザーID
        $comment->save();
        
        return redirect()->back();
    }
    
}
