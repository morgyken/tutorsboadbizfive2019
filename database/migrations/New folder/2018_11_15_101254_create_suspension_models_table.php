<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspensionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspension_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tutor_id')->unique();
            $table->integer('mode')->nullable();   
            $table->integer('user_id')->nullable(); 
            $table->integer('message')->nullable();     
        });
    }

 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suspension_models');
    }
}
