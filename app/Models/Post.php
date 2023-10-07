<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}/*投稿作成処理モデル*/

