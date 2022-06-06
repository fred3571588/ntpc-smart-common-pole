<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseRequisitionPoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaseRequisition_pole', function (Blueprint $table) {
            $table->id();
            $table->decimal('Lat',10,8)->comment('緯度');
            $table->decimal('Lng',10,8)->comment('經度');
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
        Schema::dropIfExists('leaseRequisition_pole');
    }
}
