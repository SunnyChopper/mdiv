<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTipsBookDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tips_book_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->string('title', 128);
            $table->text('description');
            $table->string('url', 256);
            $table->integer('downloads')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('book_tips_book_documents');
    }
}
