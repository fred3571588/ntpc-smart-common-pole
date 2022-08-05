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
        Schema::table('renteds', function (Blueprint $table) {
            $table->integer('after_rent_status')->comment('承租後處置方式:(1:保留、2:拆除、3:其他)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renteds', function (Blueprint $table) {
            //
        });
    }
};
