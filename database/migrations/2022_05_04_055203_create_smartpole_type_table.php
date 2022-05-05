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
            $table->string('name',30)->name('型號名稱');
            $table->string('shape',20)->nullable()->name('稈體');
            $table->string('material',20)->nullable()->name('材質');
            $table->float('height')->nullable()->name('高度(公尺)');
            $table->float('weight')->nullable()->name('重量(公斤)');
            $table->float('attached_weight')->nullable()->name('可附掛重量(公斤)');
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
        Schema::dropIfExists('smartpole_type');
    }
}
