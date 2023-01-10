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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',30);
            $table->string('departure_station', 35);
            $table->string('arrival_station', 35);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->tinyText('code',12);
            $table->tinyInteger('carriages_amount')->nullable();
            $table->boolean('is_in_time')->default(true);
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
        Schema::dropIfExists('trains');
    }
};
