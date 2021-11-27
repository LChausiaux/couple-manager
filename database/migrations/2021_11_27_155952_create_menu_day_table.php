<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_day', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('position')->nullable();

            $table->bigInteger('lunch_id')->nullable();
            $table->string('lunch_type')->nullable();
            $table->bigInteger('dinner_id')->nullable();
            $table->string('dinner_type')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->string('parent_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_day');
    }
}
