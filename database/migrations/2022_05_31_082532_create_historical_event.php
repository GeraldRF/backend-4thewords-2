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
        Schema::create('historical_event', function (Blueprint $table) {
            $table->id();
            $table->text('img_url');
            $table->text('name', 100);
            $table->text('description', 150);
            $table->dateTime('date');
            $table->int('popularity');
            $table->text('country', 60);
            $table->text('coordinates');
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
        Schema::dropIfExists('historical_event');
    }
};
