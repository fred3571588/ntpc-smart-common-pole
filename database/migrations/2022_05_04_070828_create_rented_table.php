<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented', function (Blueprint $table) {
            $table->id();
            $table->float('cost')->comment('出租單價');
            $table->integer('amount_pole')->comment('出租桿數');
            $table->integer('amount_attached')->comment('出租欄位數');
            $table->dateTime('rent_startdate')->comment('出租起始日期');
            $table->dateTime('rent_enddate')->comment('出租終止日期');
            $table->integer('rent_days')->comment('出租天數');
            $table->string('enterprise_name',100)->comment('企業名稱');
            $table->integer('taxnumber')->comment('統一編號');
            $table->string('contacts_name',10)->comment('聯絡人名稱');
            $table->string('contacts_gender',10)->comment('性別');
            $table->string('contacts_phone')->comment('連絡電話');
            $table->string('contacts_email',20)->comment('E-mail');
            $table->integer('deposit')->comment('保證金');
            $table->integer('rent')->comment('租金');
            $table->integer('total')->comment('總金額');
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
        Schema::dropIfExists('rented');
    }
}
