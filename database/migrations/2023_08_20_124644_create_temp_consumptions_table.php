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
        Schema::create('temp_consumptions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('machine');
            $table->string('code_product');
            $table->string('name_product');
            $table->string('description');
            $table->string('used');
            $table->integer('user_input');
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
        Schema::dropIfExists('temp_consumptions');
    }
};
