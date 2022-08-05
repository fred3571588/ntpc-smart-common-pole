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
        Schema::create('lease_requisition_report_removes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('拆卸檢驗人員');
            $table->boolean('pass')->comment('拆卸檢查合格');
            $table->dateTime('pass_date')->comment('拆卸檢查核格日期');
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
        Schema::dropIfExists('lease_requisition_report_removes');
    }
};
