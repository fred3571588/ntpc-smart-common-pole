<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leasers', function (Blueprint $table) {
            $table->id();
            $table->string('account')->comment('帳號');
            $table->string('certificate')->comment('憑證序號');
            $table->string('name',20)->comment('持有者名稱');
            $table->dateTime('enable_at')->comment('簽發日期');
            $table->dateTime('unable_at')->comment('結束日期');
            $table->string('enterprise_name',100)->comment('企業名稱');
            $table->integer('taxnumber')->comment('統一編號');
            $table->string('contacts_name',10)->comment('聯絡人名稱');
            $table->string('contacts_gender',10)->comment('性別');
            $table->string('contacts_phone')->comment('連絡電話');
            $table->string('contacts_email',20)->comment('E-mail');
            $table->string('memo',100)->nullable()->comment('備註說明');
            $table->integer('status')->comment('資料狀態');
            $table->boolean('active')->comment('帳號啟用');
            $table->timestamps();
            $table->bigInteger('created_by')->comment('資料建立人員');
            $table->bigInteger('updated_by')->comment('最後編輯人員');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leasers');
    }
}
