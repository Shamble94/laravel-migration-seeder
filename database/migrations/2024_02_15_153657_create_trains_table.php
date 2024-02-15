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
        Schema::create("train", function (Blueprint $train){
            $train->id();
            $train->string("azienza", 30);
            $train->string("departure_station", 50);
            $train->string("destination", 50);
            $train->string("date", 50);
            $train->smallInteger("departure_hour"); 
            $train->smallInteger("arrival_hour");
            $train->string("train_code", 10);
            $train->tinyInteger("number_wagon")->unsigned();
            $train->tinyInteger("in_hour")->unsigned()->default(1);
            $train->tinyInteger("deleted")->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("train");
    }
};
