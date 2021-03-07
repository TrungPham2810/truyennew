<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url_key')->nullable(false);
            $table->text('content')->nullable(true);
            $table->integer('book_id')->nullable(false);
            $table->integer('previous_id')->nullable(true);
            $table->integer('translator_id')->nullable(false);
            $table->timestamps();
            $table->unique(["url_key", "name", "book_id"], 'chapter_name_url_book_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters');
    }
}
