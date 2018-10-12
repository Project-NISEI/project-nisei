<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1539373251UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'board_member')) {
                $table->tinyInteger('board_member')->nullable()->default('0');
                }
if (!Schema::hasColumn('users', 'position_name')) {
                $table->string('position_name')->nullable();
                }
if (!Schema::hasColumn('users', 'pronouns')) {
                $table->string('pronouns')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('board_member');
            $table->dropColumn('position_name');
            $table->dropColumn('pronouns');
            
        });

    }
}
