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
        Schema::table('smart_poles', function (Blueprint $table) {
            $table->float('Lat')->comment('緯度')->change();
            $table->float('Lng')->comment('經度')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smartpoles', function (Blueprint $table) {
            //
        });
    }
};
