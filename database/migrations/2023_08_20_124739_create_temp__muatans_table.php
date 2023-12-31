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
        Schema::create('temp__muatans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('product_name');
            $table->string('previous');
            $table->string('receive');
            $table->string('transfer');
            $table->string('remain');
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
        Schema::dropIfExists('temp__muatans');
    }
};
