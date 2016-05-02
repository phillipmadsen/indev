<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatepostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned()->nullable();
            $table->boolean('is_published');
            $table->boolean('is_draft');
            $table->boolean('has_product_link');
            $table->boolean('product_link_nofollow');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('gp_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('path')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('file_size')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('link_to_product_title')->nullable();
            $table->string('link_to_product')->nullable();
            $table->string('lang')->nullable();
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
        Schema::drop('posts');
    }
}
