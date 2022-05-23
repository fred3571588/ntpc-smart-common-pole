<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedPoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented_pole', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rented_id')->comment('出租申請單位號');
            $table->bigInteger('smartpole_id')->comment('共桿編號');
            $table->bigInteger('SNSL')->comment('路燈編號');
            $table->integer('amount_attached')->comment('出租欄位數量');
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
        Schema::dropIfExists('rented_pole');
    }
}
