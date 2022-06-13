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
        Schema::table('leaser_tokens', function (Blueprint $table) {
            $table->unsignedBigInteger('leaser_id')->before('access_token')->comment('leaser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaser_tokens', function (Blueprint $table) {
            //
        });
    }
};
