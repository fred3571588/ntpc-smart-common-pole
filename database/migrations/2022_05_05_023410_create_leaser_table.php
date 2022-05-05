<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaser', function (Blueprint $table) {
            $table->id();
            $table->string('account')->name('帳號');
            $table->string('password')->name('密碼');
            $table->string('certificate')->name('憑證序號');
            $table->string('name',20)->name('持有者名稱');
            $table->dateTime('enable_at')->name('簽發日期');
            $table->dateTime('unable_at')->name('結束日期');
            $table->string('enterprise_name',100)->name('企業名稱');
            $table->integer('taxnumber')->name('統一編號');
            $table->string('contacts_name',10)->name('聯絡人名稱');
            $table->string('contacts_gender',10)->name('性別');
            $table->string('contacts_phone')->name('連絡電話');
            $table->string('contacts_email',20)->name('E-mail');
            $table->string('memo',100)->nullable()->name('備註說明');
            $table->integer('status')->name('資料狀態');
            $table->timestamps();
            $table->bigInteger('created_by')->name('資料建立人員');
            $table->bigInteger('updated_by')->name('最後編輯人員');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaser');
    }
}
