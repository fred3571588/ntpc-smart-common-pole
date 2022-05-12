<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permission', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->name('使用者帳號編號');
            $table->boolean('C1-1_smartpole_state')->name('C1-1共桿狀況查詢');
            $table->boolean('C1-2_leased')->name('C1-2承租管理');
            $table->boolean('C1-3_rented_inquire')->name('C1-3設備出租管理_查詢、匯出');
            $table->boolean('C1-3_rented_audit')->name('C1-3設備出租管理_編輯、審核');
            $table->boolean('C2-1_smartpole_inquire')->name('C2-1共桿清單列表_查詢');
            $table->boolean('C2-1_smartpole_edit')->name('C2-1共桿清單列表_編輯');
            // $table->boolean('C2-2_leaseRequisition_inquire')->name('C2-2智慧共桿審核_查詢');
            // $table->boolean('C2-2_leaseRequisition_audit')->name('C2-2智慧共桿審核_編輯、審核');
            $table->boolean('C3-1_attachment_map')->name('C3-1附掛設備地圖展示');
            $table->boolean('C4-1_area_inquire')->name('C4-1場域管理_查詢');
            $table->boolean('C4-1_area_edit')->name('C4-1場域管理_編輯');
            $table->boolean('C4-2_smartpole_type')->name('C4-2共桿型號設定');
            $table->boolean('C5-1_smartpole_statistics')->name('C5_1智慧共桿盞數查詢');
            $table->boolean('C5-2_attachment_statistics')->name('C5_2附掛設備數量統計');
            $table->boolean('C5-3_apply_statistics')->name('C5_3申請情形統計');
            $table->boolean('C5-4_failure_rate_statistics')->name('C5_4故障率統計');
            $table->boolean('C5-5_income_statistics')->name('C5_5收益統計');
            $table->boolean('C6-1_user')->name('C6-1帳號管理');
            $table->boolean('C6-2_log')->name('C6-2操作歷程');
            $table->boolean('C6-3_announcement_inquire')->name('C6-3公告管理_查詢');
            $table->boolean('C6-3_announcement_edit')->name('C6-3公告管理_編輯');
            $table->boolean('C6-4_document_inquire')->name('C6-4下載管理_查詢');
            $table->boolean('C6-4_document_edit')->name('C6-4下載管理_編輯');
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
        Schema::dropIfExists('user_permission');
    }
}
