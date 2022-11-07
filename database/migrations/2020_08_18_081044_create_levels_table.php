<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();;
            $table->string('email');
            $table->decimal('age','10','2');
            $table->decimal('experience','10','2');
            $table->decimal('grade','10','2');
            $table->decimal('attempts','10','2');
            $table->string('k_level');
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
        Schema::dropIfExists('levels');
    }
}
