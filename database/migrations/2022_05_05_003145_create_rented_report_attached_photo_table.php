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
            $table->string('photo_path',200)->comment('照片存放路徑');
            $table->string('photo_name',20)->comment('照片名稱');
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
        Schema::dropIfExists('rented_report_attached_photo');
    }
}
