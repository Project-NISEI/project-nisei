<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtToProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::table('products', function(Blueprint $table) {
	    if (!Schema::hasColumn('products', 'deleted_at')) {
		$table->softDeletes();
	    }
	});
	Schema::table('product_subpages', function(Blueprint $table) {
	    if (!Schema::hasColumn('product_subpages', 'deleted_at')) {
		$table->softDeletes();
	    }
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::table('products', function(Blueprint $table) {
	    $table->dropColumn('deleted_at');
	});
	Schema::table('products', function(Blueprint $table) {
	    $table->dropColumn('deleted_at');
	});
    }
}
