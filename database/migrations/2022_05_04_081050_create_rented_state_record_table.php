<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedStateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented_state_record', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rented_id')->name('出租申請單單號');
            $table->integer('rented_state_id')->name('出租案件狀態');
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
        Schema::dropIfExists('rented_state_record');
    }
}
