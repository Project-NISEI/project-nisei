<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	if(! Schema::hasTable('products')) {
	    Schema::create('products', function (Blueprint $table) {
		$table->increments('id');
		$table->timestamps();
		$table->text('title');
		$table->text('slug');
		$table->string('listing_image')->nullable();
		$table->tinyInteger('published')->nullable()->default(false);
		$table->text('content')->nullable();
	    });
	}
	if(! Schema::hasTable('product_subpages')) {
	    Schema::create('product_subpages', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('product_id')->unsigned()->nullable();
		$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
		$table->timestamps();
		$table->text('title');
		$table->text('slug');
		$table->tinyInteger('published')->nullable()->default(false);
		$table->text('content')->nullable();
	    });
	}
    } 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::dropIfExists('products');
	Schema::dropIfExists('product_subpages');
    }
}
