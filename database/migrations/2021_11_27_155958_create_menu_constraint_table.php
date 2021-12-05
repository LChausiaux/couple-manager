<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuConstraintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_constraints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('healthy_rating_min')->nullable();
            $table->tinyInteger('healthy_rating_max')->nullable();
            $table->boolean('leftovers')->nullable();
            $table->boolean('sport_friendly')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_constraints');
    }
}
