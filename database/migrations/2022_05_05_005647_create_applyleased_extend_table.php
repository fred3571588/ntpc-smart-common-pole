<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyleasedExtendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyleased_extend', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applyleased_id')->name('租用申請單單號');
            $table->dateTime('extend_date')->name('展延日期');
            $table->integer('extend_days')->name('展延天數');
            $table->integer('extend_rent')->name('展延租金');
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
        Schema::dropIfExists('applyleased_extend');
    }
}
