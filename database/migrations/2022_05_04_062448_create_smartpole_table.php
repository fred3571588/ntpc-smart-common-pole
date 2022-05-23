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
            $table->integer('smartpole_type_id')->comment('共桿型號編號');
            $table->integer('area_id')->comment('場域編號');
            $table->integer('smart_ammeter_id')->comment('智慧電錶編號');
            $table->string('district',10)->nullable()->comment('行政區');
            $table->string('village',10)->nullable()->comment('里別');
            $table->string('road',10)->nullable()->comment('路段');
            $table->string('address',100)->nullable()->comment('地址');
            $table->decimal('Lat',10,8)->comment('緯度');
            $table->decimal('Lng',10,8)->comment('經度');
            $table->string('affiliated',20)->comment('所屬機關');
            $table->dateTime('build_date')->comment('架設日期');
            $table->string('mode',10)->comment('架設方式(桿身置換/新立燈桿)');
            $table->string('build_company',20)->comment('架設廠商');
            $table->string('repair_company',20)->nullable()->comment('維護廠商');
            $table->dateTime('repair_startdate')->nullable()->comment('保固起始日期');
            $table->dateTime('repair_enddate')->nullable()->comment('保固終止日期');
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
        Schema::dropIfExists('smartpole');
    }
}
