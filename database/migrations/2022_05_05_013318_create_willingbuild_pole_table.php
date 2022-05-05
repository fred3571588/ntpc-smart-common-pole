<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWillingbuildPoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('willingbuild_pole', function (Blueprint $table) {
            $table->id();
            $table->biginteger('willingbuild_id')->name('架設意願表單號');
            $table->biginteger('SNSL')->name('路燈編號');
            $table->decimal('Lat',10,8)->name('緯度');
            $table->decimal('Lng',10,8)->name('經度');
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
        Schema::dropIfExists('willingbuild_pole');
    }
}
