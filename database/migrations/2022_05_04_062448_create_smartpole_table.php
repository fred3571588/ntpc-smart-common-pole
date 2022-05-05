<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartpoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartpole', function (Blueprint $table) {
            $table->id();
            $table->integer('smartpole_type_id')->name('共桿型號編號');
            $table->integer('area_id')->name('場域編號');
            $table->string('district',10)->nullable()->name('行政區');
            $table->string('village',10)->nullable()->name('里別');
            $table->string('road',10)->nullable()->name('路段');
            $table->string('address',100)->nullable()->name('地址');
            $table->decimal('Lat',10,8)->name('緯度');
            $table->decimal('Lng',10,8)->name('經度');
            $table->string('affiliated',20)->name('所屬機關');
            $table->dateTime('build_date')->name('架設日期');
            $table->string('mode',10)->name('架設方式(桿身置換/新立燈桿)');
            $table->string('build_company',20)->nullable()->name('架設廠商');
            $table->string('repair_company',20)->nullable()->name('維護廠商');
            $table->dateTime('repair_startdate')->nullable()->name('保固起始日期');
            $table->dateTime('repair_enddate')->nullable()->name('保固終止日期');
            $table->string('memo',100)->nullable()->name('備註說明');
            $table->bigInteger('status')->name('資料狀態');
            $table->bigInteger('created_by')->name('資料建立人員');
            $table->bigInteger('updated_by')->name('最後編輯人員');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartpole');
    }
}
