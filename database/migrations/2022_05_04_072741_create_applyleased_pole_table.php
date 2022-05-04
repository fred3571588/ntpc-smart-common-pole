<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyleasedPoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyleased_pole', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applyleased_id')->name('租用申請單位號');
            $table->bigInteger('smartpole_id')->name('共桿編號');
            $table->bigInteger('SNSL')->name('路燈編號');
            $table->integer('amount_attached')->name('租用欄位數量');
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
        Schema::dropIfExists('applyleased_pole');
    }
}
