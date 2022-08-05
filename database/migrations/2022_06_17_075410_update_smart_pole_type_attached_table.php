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
        Schema::table('smart_pole_type_attacheds', function (Blueprint $table) {
            $table->dropColumn(['limit_weight','limit_voltage','limit_volume']);
            $table->string('attached_type',20)->default('網路設備')->comment('設備種類名稱');
            $table->integer('poles')->default(3)->comment('設備種類孔位數量');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smart_pole_type_attacheds', function (Blueprint $table) {
            //
        });
    }
};
