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
        Schema::table('smart_pole_types', function (Blueprint $table) {
            $table->unsignedBigInteger('smart_pole_id')->nullable()->comment('smart_pole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smart_pole_types', function (Blueprint $table) {
            //
        });
    }
};
