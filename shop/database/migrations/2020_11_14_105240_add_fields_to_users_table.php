<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('street')->nullable();
            $table->integer('house_number')->nullable();
            $table->string('town')->nullable();
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
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('street');
            $table->dropColumn('house_number');
            $table->dropColumn('town');
        });
    }
}
