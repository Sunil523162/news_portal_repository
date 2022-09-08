<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('sub_heading')->nullable();
            $table->string('slug');
            $table->string('auther')->nullable();
            $table->longText('description')->nullable();
            $table->date('post_date')->nullable();
            $table->time('post_time')->nullable();
            $table->string('feature_image')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_popular')->default(0);
            $table->boolean('flash_post')->default(0);
            $table->foreignId('post_category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
