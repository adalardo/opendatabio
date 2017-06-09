<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('object_id'); // used by Laravel's morphTo
	    $table->string('object_type'); // used by Laravel's morphTo
	    $table->text('note')->nullable();
	    $table->integer('bib_reference_id')->unsigned()->nullable();
	    $table->foreign('bib_reference_id')->references('id')->on('bib_references');
            $table->timestamps();
	});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
        //
    }
}
