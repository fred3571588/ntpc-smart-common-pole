<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseRequisitionStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaseRequisition_state', function (Blueprint $table) {
            $table->id();
            $table->string('leaseRequisition_name',20)->name('架設意願表單號_申請');
            $table->string('check_name',20)->name('架設意願表單號_審核');
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
        Schema::dropIfExists('leaseRequisition_state');
    }
}
