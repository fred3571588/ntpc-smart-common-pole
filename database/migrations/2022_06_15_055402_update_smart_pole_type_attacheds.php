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
            $table->unsignedBigInteger('smart_pole_type_id')->nullable()->comment('smart_pole_type');
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
