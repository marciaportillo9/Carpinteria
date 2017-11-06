<?php

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

        Schema::create(/**
         * @param Blueprint $table
         */
            'clients', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('nit');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');

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
