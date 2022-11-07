<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();;
            $table->decimal('activist','10','2');
            $table->decimal('reflector','10','2');
            $table->decimal('sensing','10','2');
            $table->decimal('intuitive','10','2');
            $table->decimal('visual','10','2');
            $table->decimal('verbal','10','2');
            $table->decimal('sequential','10','2');
            $table->decimal('global','10','2');
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
        Schema::dropIfExists('styles');
    }
}
