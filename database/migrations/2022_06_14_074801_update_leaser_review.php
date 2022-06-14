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
        Schema::rename('leaser_review','leaser_reviews');
        Schema::table('leaser_reviews', function (Blueprint $table) {
            $table->dropColumn(['account','file_name','file_path']);
            $table->unsignedBigInteger('leaser_id')->before('pass')->comment('leaser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaser_review', function (Blueprint $table) {
            //
        });
    }
};
