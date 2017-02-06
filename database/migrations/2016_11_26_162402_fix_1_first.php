<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix1First extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //PRODUCTOS
         Schema::table('products', function($table)
        {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            
            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade');
            
            $table->integer('main')->unsigned();
            $table->string('fiber');
            $table->string('width');
            $table->string('weight');
            $table->string('fabric');
            $table->string('backing');
            $table->string('pattern');
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
