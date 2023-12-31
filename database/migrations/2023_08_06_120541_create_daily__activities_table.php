<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_activitiy', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('time_from');
            $table->string('time_to');
            $table->string('description');
            $table->string('user_input');
            $table->string('id_vdr');
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
        Schema::dropIfExists('daily__activities');
    }
};
