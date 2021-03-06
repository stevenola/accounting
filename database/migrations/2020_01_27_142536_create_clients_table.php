<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable;
            $table->string('street')->nullable;
            $table->string('city')->nullable;
            $table->string('state')->nullable;
            $table->integer('zip')->nullable;
            $table->integer('retainer');
            $table->integer('recurring');
            $table->integer('print');
            $table->integer('active');
            $table->integer('in_state');
            $table->string('consultant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
