<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangerZonesTable extends Migration
{
    public function up()
    {
        Schema::create('danger_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->float('radius');
            $table->integer('risk_level');
            $table->unsignedBigInteger('natural_disaster_id');
            $table->timestamps();
            
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('natural_disaster_id')->references('id')->on('natural_disasters');
        });
    }

    public function down()
    {
        Schema::dropIfExists('danger_zones');
    }
}