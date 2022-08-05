<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachedDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attached_device', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->comment('附掛設備類型名稱');
            $table->string('type',10)->comment('設備類型');
            $table->string('company',30)->comment('設備廠牌');
            $table->string('model',30)->comment('設備型號');
            $table->float('weight')->comment('設備重量');
            $table->float('wattage')->comment('耗用瓦數');
            $table->string('other',255)->nullable()->comment('其他資訊');
            $table->string('memo',100)->nullable()->comment('備註說明');
            $table->integer('status')->comment('資料狀態');
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
        Schema::dropIfExists('attached_device');
    }
}
