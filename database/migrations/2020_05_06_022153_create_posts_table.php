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
            $table-> string('title');
            $table-> dateTime('time_writen');
            $table-> text('content');

            $table->string ('featured_image') ->nullable(); //nullable : its okay if its empty
            $table->integer('vote_up')->nullable() ;
            $table-> integer('vote_down')->nullable();

            //relationShips
            $table->integer('user_id');
            $table->integer('category_id');


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
