<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTournamentsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('title');
            $table->text('slug');
	    $table->tinyInteger('display')->nullable()->default(false);
        });
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->date('date');
	    $table->time('reg_time');
	    $table->time('start_time');
	    $table->text('venue');
	    $table->text('address');
	    $table->text('link')->nullable();
	    $table->enum('region',['NA','Europe','RoW']);
	    $table->text('subregion');
	    $table->text('entry_fee');
	    $table->text('contact_email')->nullable();
	    $table->tinyInteger('publish_email');
	    $table->integer('tournament_set_id')->unsigned()->nullable();
            $table->foreign('tournament_set_id')->references('id')->on('tournament_sets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
        Schema::dropIfExists('tournament_sets');
    }
}
