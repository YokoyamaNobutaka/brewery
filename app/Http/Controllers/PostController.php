<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/*ModelsのPostというモデルを使用*/

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
