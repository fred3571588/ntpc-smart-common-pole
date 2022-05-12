<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedReportAttachedPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented_report_attached_photo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rented_report_attached_id')->name('附掛回報編號');
            $table->string('photo_path',200)->name('照片存放路徑');
            $table->string('photo_name',20)->name('照片名稱');
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
        Schema::dropIfExists('rented_report_attached_photo');
    }
}
