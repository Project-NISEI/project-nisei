<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('faqs', function (Blueprint $table) {
          $table->integer('index')->default(9999);
      });

      \DB::statement('UPDATE faqs SET `index` = id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('faqs', function (Blueprint $table) {
          $table->dropColumn('index');
      });
    }
}
