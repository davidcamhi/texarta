<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //SLIDES
        Schema::create('contact_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('main_text');
            $table->string('text2');
            $table->string('text3');
            $table->string('title1');
            $table->string('text_title');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('title2');
            $table->string('text_title2');
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
        Schema::dropIfExists('contact_info');
    }
}
