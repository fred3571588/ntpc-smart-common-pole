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
        Schema::create('street_lights', function (Blueprint $table) {
            $table->id();
            $table->string('district',20)->comment('行政區');
            $table->integer('no')->comment('路燈編號');
            $table->integer('oldNo')->comment('舊路燈編號');
            $table->string('address')->comment('路燈地址');
            $table->integer('power')->nullable()->comment('路燈瓦數');
            $table->float('TWD97X')->nullable()->comment('TWD97X座標');
            $table->float('TWD97Y')->nullable()->comment('TWD97Y座標');
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
        Schema::dropIfExists('street_lights');
    }
};
