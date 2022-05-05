<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWillingbuildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('willingbuild', function (Blueprint $table) {
            $table->id();
            $table->integer('amount_pole')->name('租用桿數');
            $table->integer('willing_id')->name('租借者帳號編號');
            $table->string('enterprise_name',100)->name('企業名稱');
            $table->integer('taxnumber')->name('統一編號');
            $table->string('contacts_name',10)->name('聯絡人名稱');
            $table->string('contacts_gender',10)->name('性別');
            $table->string('contacts_phone')->name('連絡電話');
            $table->string('contacts_mail',20)->name('E-mail');
            $table->integer('current_state_id')->name('當前狀態');
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
        Schema::dropIfExists('willingbuild');
    }
}
