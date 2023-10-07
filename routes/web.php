<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//外部にあるPostControllerクラスをインポート。
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);
/*一覧スタート画面：/を取得したらPostController::classの'index'を実行*/
Route::get('/posts/create', [PostController::class, 'create']);
//投稿画面：*/posts/createをgetメソッド取得したらPostController::classの'create'を実行*/
Route::get('/posts/{post}', [PostController::class, 'show']);
//詳細画面：*/posts/{post}をgetメソッド取得したらPostController::classの'show'を実行*/
Route::post('/posts', [PostController::class, 'store']);
/*投稿画面  保存用：/postsをpostメソッド取得したらPostController::classの'store'を実行*/