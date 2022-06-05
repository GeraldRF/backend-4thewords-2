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
        Schema::create('historical_events', function (Blueprint $table) {
            $table->id();
            $table->text('img_url');
            $table->string('name', 100);
            $table->string('description', 150);
            $table->text('history');
            $table->dateTime('date');
            $table->integer('popularity');
            $table->string('country', 60);
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
