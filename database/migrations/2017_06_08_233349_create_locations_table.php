<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
	    $table->integer('object_id')->unsigned();
	    $table->foreign('object_id')->references('object_id')->on('objects');
	    $table->primary('object_id');
	    $table->string('name'); 
	    $table->integer('parent_id')->unsigned()->nullable();
	    $table->foreign('parent_id')->references('object_id')->on('locations'); // NOTE: a parent MUST be a location
	    $table->timestamps();
            // TODO: Add the other data columns and Baum-related columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
