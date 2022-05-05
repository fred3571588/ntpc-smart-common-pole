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
            $table->boolean('C1_1_leased')->name('C1_1租用情形查詢');
            $table->boolean('C1_2_applyleased')->name('C1_2設備附掛租用表');
            $table->boolean('C1_3_leased_Inquire')->name('C1_3租用管理_查詢、匯出');
            $table->boolean('C1_3_leased_audit')->name('C1_3租用管理_編輯、審核');
            $table->boolean('C2_1_smartpole_Inquire')->name('C2_1智慧共桿清單列表_查詢');
            $table->boolean('C2_1_smartpole_edit')->name('C2_1智慧共桿清單列表_編輯');
            $table->boolean('C2_2_willingbuild_Inquire')->name('C2_2智慧共桿審核_查詢');
            $table->boolean('C2_2_willingbuild_audit')->name('C2_2智慧共桿審核_編輯、審核');
            $table->boolean('C3_1_smartpole')->name('C3_1附掛設備地圖展示');
            $table->boolean('C4_1_Area_Inquire')->name('C4_1場域管理_查詢');
            $table->boolean('C4_1_Area_edit')->name('C4_1場域管理_編輯');
            $table->boolean('C4_2_leased_cost')->name('C4_2租用設定_編輯');
            $table->boolean('C5_statistics')->name('C5 統計報表');
            $table->boolean('C6_1_user')->name('C6_1帳號管理');
            $table->boolean('C6_2_log')->name('C6_2操作歷程');
            $table->boolean('C6_3_announcement_Inquire')->name('C6_3公告管理_查詢');
            $table->boolean('C6_3_announcement_edit')->name('C6_3公告管理_編輯');
            $table->boolean('C6_4_document_Inquire')->name('C6_4下載管理_查詢');
            $table->boolean('C6_4_document_edit')->name('C6_4下載管理_編輯');
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
