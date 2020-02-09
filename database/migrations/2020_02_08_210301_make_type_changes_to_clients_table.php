<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTypeChangesToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->integer('retainer');
            $table->integer('recurring');
            $table->integer('print');
            $table->integer('active');
            $table->integer('in_state');
            $table->string('consultant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
