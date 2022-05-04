<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyleasedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyleased', function (Blueprint $table) {
            $table->id();
            $table->integer('attached_device_id')->name('附掛設備類型編號');
            $table->float('cost')->name('租用單價');
            $table->integer('ammount_pole')->name('租用桿數');
            $table->integer('ammount_attached')->name('租用欄位數');
            $table->datetime('lease_startdate')->name('租用起始日期');
            $table->datetime('lease_enddate')->name('租用終止日期');
            $table->integer('lease_days')->name('租用天數');
            $table->integer('apply_id')->name('申請帳號');
            $table->string('enterprise_name',100)->name('企業名稱');
            $table->integer('textnumber')->name('統一編號');
            $table->string('contacts_name')->name('聯絡人名稱');
            $table->string('contacts_gender')->name('性別');
            $table->string('contacts_phone')->name('連絡電話');
            $table->string('contacts_mail')->name('E-mail');
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
        Schema::dropIfExists('applyleased');
    }
}
