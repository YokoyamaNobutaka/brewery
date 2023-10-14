<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comment';
    
    public function user(){
    //コメントは一つのユーザーがする。
    return $this->belongsTo(User::class,"users_id","id"); 
    }
    
    public function post(){
    //コメントは一つの投稿がある。
    return $this->belongsTo(Post::class); 
    }
    
}
