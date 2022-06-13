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
        Schema::table('leaser_token', function (Blueprint $table) {
            $table->renameColumn('token', 'access_token');
            $table->dropColumn('clientIP');
            $table->string('refresh_token')->comment('refresh_token');
            $table->boolean('work')->comment('是否有效');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaser_token', function (Blueprint $table) {
            //
        });
    }
};
