<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

		Schema::create('videos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('youtubeID');
			$table->string('url_slug');
			$table->string('thumbnail');
			$table->string('length');
			$table->text('description');
			$table->integer('views');
			$table->dateTime('published_at');
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
        Schema::drop('videos');
    }
}
