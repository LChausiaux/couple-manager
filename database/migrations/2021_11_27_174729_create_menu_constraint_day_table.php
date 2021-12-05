<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuConstraintDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_constraints_days', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_lunch')->nullable();
            $table->boolean('is_dinner')->nullable();

            $table->bigInteger('day_id')->nullable();
            $table->bigInteger('constraint_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_constrainst_days');
    }
}
