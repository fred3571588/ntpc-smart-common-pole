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
        Schema::table('leaser_reviews', function (Blueprint $table) {
            $table->boolean('pass')->nullable()->comment('是否通過')->change();
            $table->dateTime('authorize_time')->nullable()->comment('通過時間')->change();
            $table->bigInteger('authorize_by')->nullable()->comment('審核人員')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaser_reviews', function (Blueprint $table) {
            //
        });
    }
};
