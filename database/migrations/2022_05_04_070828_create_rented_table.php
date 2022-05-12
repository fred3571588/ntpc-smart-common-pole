<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented', function (Blueprint $table) {
            $table->id();
            $table->integer('attached_device_id')->name('附掛設備類型編號');
            $table->float('cost')->name('出租單價');
            $table->integer('amount_pole')->name('出租桿數');
            $table->integer('amount_attached')->name('出租欄位數');
            $table->dateTime('rent_startdate')->name('出租起始日期');
            $table->dateTime('rent_enddate')->name('出租終止日期');
            $table->integer('rent_days')->name('出租天數');
            // $table->integer('apply_id')->name('申請帳號');
            $table->string('enterprise_name',100)->name('企業名稱');
            $table->integer('taxnumber')->name('統一編號');
            $table->string('contacts_name',10)->name('聯絡人名稱');
            $table->string('contacts_gender',10)->name('性別');
            $table->string('contacts_phone')->name('連絡電話');
            $table->string('contacts_email',20)->name('E-mail');
            $table->integer('deposit')->name('保證金');
            $table->integer('rent')->name('租金');
            $table->integer('total')->name('總金額');
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
        Schema::dropIfExists('rented');
    }
}
