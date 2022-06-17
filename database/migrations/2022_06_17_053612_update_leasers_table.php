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
            $table->string('cellphone',10)->nullable()->comment('行動電話');
            $table->renameColumn('contacts_name','applicant');
            $table->renameColumn('contacts_gender','applicants_gender');
            $table->renameColumn('contacts_phone','applicants_phone');
            $table->renameColumn('contacts_email','applicants_email');
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
