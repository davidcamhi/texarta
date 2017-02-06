<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //MENSAJES
         Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('company');
            $table->string('tel');
            $table->string('message');
            $table->timestamps();
        });
          
        //COTIZACIONES
         Schema::create('price_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('company');
            $table->string('tel');
            $table->string('comments');
            $table->timestamps();
                           
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
                           
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade');
                           
            $table->integer('quantity');
            
        });
             
         //MUESTRAS
         Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('company');
            $table->string('tel');
            $table->string('comments');
            $table->timestamps();
                           
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
                           
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
