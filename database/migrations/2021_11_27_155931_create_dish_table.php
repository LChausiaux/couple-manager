<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->boolean('is_public')->nullable();
            $table->tinyInteger('healthy_rating')->nullable();
            $table->boolean('leftovers')->nullable();
            $table->boolean('sport_friendly')->nullable();
            $table->text('content')->nullable();

            $table->bigInteger('family_id')->nullable();
            $table->bigInteger('collection_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish');
    }
}
