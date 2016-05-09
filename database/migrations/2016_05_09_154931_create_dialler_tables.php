<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiallerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialler_servers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('server_type_id', false, true)->nullable();
            $table->string('name');
            $table->string('ip_address');
            $table->text('description')->nullable();
            $table->string('hostname')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dialler_servers');
    }
}
