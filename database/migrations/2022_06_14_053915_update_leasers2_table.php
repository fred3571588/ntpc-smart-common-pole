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
        Schema::table('leasers', function (Blueprint $table) {
            $table->date('birthday')->after('contacts_email')->nullable()->comment('公司設立日期');
            $table->string('company_address',100)->after('birthday')->nullable()->comment('公司地址');
            $table->string('address',100)->after('company_address')->nullable()->comment('通訊地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leasers', function (Blueprint $table) {
            //
        });
    }
};
