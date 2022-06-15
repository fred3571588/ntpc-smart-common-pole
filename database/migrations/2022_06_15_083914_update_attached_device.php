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
        Schema::rename('attached_device','attached_devices');
        Schema::table('attached_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('smart_pole_attached_id')->nullable()->comment('smart_pole_attached');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attached_devices', function (Blueprint $table) {
            //
        });
    }
};
