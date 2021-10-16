<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('birthplace')->nullable();
            $table->integer('frequency')->nullable();
            $table->integer('infomation')->nullable();
            $table->string('activities')->nullable();
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
            $table->dropColumn('birthplace');
            $table->dropColumn('frequency');
            $table->dropColumn('infomation');
            $table->dropColumn('activities');
        });
    }
}
