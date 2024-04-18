<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('guest_id');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
            
            $table->foreign('guest_id')->references('id')->on('guests');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}