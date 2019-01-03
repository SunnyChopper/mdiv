<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_board', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_user_id');
            $table->string('title', 128);
            $table->text('description');
            $table->string('category');
            $table->string('featured_image_url', 256);
            $table->integer('views')->default(0);
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('project_board');
    }
}
