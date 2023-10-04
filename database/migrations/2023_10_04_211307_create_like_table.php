<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('like', function (Blueprint $table) 
        {
            $table->id();
	        $table->bigInteger('users_id')->unsigned();    
            //'user_id' は 'usersテーブル' の 'id' を参照する外部キーです
            $table->bigInteger('posts_id')->unsigned();    
            //'posts_id' は 'postsテーブル' の 'id' を参照する外部キーです
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
    }
};
