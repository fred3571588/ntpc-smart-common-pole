<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartpoleTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartpole_type', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->comment('型號名稱');
            $table->string('shape',20)->nullable()->comment('稈體');
            $table->string('material',20)->nullable()->comment('材質');
            $table->float('height')->nullable()->comment('高度(公尺)');
            $table->float('weight')->nullable()->comment('重量(公斤)');
            $table->float('attached_weight')->nullable()->comment('可附掛重量(公斤)');
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
        Schema::dropIfExists('smartpole_type');
    }
}
