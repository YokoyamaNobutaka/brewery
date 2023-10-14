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
        Schema::create('posts_users', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained('users');
            //'usesr_id' は 'usersテーブル' の 'id' を参照する外部キーです
            $table->foreignId('posts_id')->constrained('posts');
            //'posts_id' は 'postsテーブル' の 'id' を参照する外部キーです
            $table->primary(['users_id', 'posts_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_users');
    }
};
