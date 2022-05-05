<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartpoleAttachedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartpole_attached', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('smartpole_id')->name('共桿編號');
            $table->boolean('isAttach')->name('有無附掛(0：無、1：有)');
            $table->string('attachment',100)->nullable()->name('附掛物');
            $table->bigInteger('applyleased_id')->nullable()->name('租用申請表單單號');
            $table->string('attach_company',20)->nullable()->name('附掛廠商(單位)');
            $table->dateTime('attach_startdate')->nullable()->name('附掛起始日期');
            $table->dateTime('attach_enddate')->nullable()->name('附掛終止日期');
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
        Schema::dropIfExists('smartpole_attached');
    }
}
