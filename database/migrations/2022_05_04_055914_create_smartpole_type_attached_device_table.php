<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartpoleTypeAttachedDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartpole_type_attached_device', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('smartpole_type_attached_id')->name('桿型欄位編號');
            $table->integer('arrached_device_id')->name('附掛設備類型編號');
            $table->integer('amount')->name('可附掛數量');
            $table->string('memo',100)->nullable()->name('備註說明');
            $table->bigInteger('status')->name('資料狀態');
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
        Schema::dropIfExists('smartpole_type_attached_device');
    }
}
