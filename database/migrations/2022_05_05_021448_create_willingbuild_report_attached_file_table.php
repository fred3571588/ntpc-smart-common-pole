<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWillingbuildReportAttachedFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('willingbuild_report_attached_file', function (Blueprint $table) {
            $table->id();
            $table->biginteger('willingbuild_report_attached_id')->name('架設回報編號');
            $table->string('file_path',200)->name('存放路徑');
            $table->string('file_name',20)->name('檔案名稱');
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
        Schema::dropIfExists('willingbuild_report_attached_file');
    }
}
