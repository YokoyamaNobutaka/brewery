<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'name',
    'area',
    'rice',
    'flavor',
    'taste',
    'alcholcontent',
    'match'
    ];/*投稿作成処理モデル*/
    
    public function comments(){
    //投稿は多数のコメントがくる。
    return $this->hasMany(Comment::class,"posts_id");
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}

