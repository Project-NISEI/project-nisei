<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPositionToProductSubpages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::table('product_subpages', function(Blueprint $table) {
	    if (!Schema::hasColumn('product_subpages', 'position')) {
		$table->integer('position');
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
	Schema::table('product_subpages', function(Blueprint $table) {
	    $table->dropColumn('position');
	});
    }
}
