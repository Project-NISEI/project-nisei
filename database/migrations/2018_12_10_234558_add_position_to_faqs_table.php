<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPositionToFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('faqs', function (Blueprint $table) {
          $table->integer('position')->default(9999);
      });

      \DB::statement('UPDATE faqs SET `position` = id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('faqs', function (Blueprint $table) {
          $table->dropColumn('position');
      });
    }
}
