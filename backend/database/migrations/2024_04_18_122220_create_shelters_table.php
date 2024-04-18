<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheltersTable extends Migration
{
    public function up()
    {
        Schema::create('shelters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->timestamps();
            
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shelters');
    }
}