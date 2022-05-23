<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaseRequisition', function (Blueprint $table) {
            $table->id();
            $table->integer('amount_pole')->comment('出租桿數');
            $table->integer('leaser_id')->comment('租借者帳號編號');
            $table->string('enterprise_name',100)->comment('企業名稱');
            $table->integer('taxnumber')->comment('統一編號');
            $table->string('contacts_name',10)->comment('聯絡人名稱');
            $table->string('contacts_gender',10)->comment('性別');
            $table->string('contacts_phone')->comment('連絡電話');
            $table->string('contacts_email',20)->comment('E-mail');
            $table->integer('current_state_id')->comment('當前狀態');
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
        Schema::dropIfExists('leaseRequisition');
    }
}
