<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_requisition_report_remove_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lease_requisition_report_remove_id')->comment('lease_requisition_report');
            $table->string('photo_path')->comment('照片路徑');
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
        Schema::dropIfExists('lease_requisition_report_remove_photos');
    }
};
