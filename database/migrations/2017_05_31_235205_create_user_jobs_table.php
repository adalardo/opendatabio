<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->string('dispatcher'); // to keep track of which type of job this is
	    $table->longText('log')->nullable();
	    $table->integer('complete')->default(0);
	    $table->string('status')->default('Submitted'); // submitted / processing / success / failed / canceled
	    $table->longText('rawdata'); // ?????
	    $table->integer('user_id')->unsigned(); // job owner
	    $table->foreign('user_id')->references('id')->on('users');
	    $table->integer('job_id')->unsigned()->nullable(); // Laravel queue job id
	    $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_jobs');
    }
}