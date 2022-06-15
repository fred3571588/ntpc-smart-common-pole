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
            $table->unsignedBigInteger('area_id')->nullable()->comment('area');
            $table->unsignedBigInteger('leaseRequisition_pole_id')->nullable()->comment('leaseRequisition_pole');
            $table->unsignedBigInteger('rented_pole_id')->nullable()->comment('rented_pole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smart_poles', function (Blueprint $table) {
            //
        });
    }
};
