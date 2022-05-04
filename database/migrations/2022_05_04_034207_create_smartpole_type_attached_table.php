<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartpoleTypeAttachedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartpole_type_attached', function (Blueprint $table) {
            $table->id();
            $table->integer('smartpole_type_id')->name('共桿型號編號');
            $table->float('limit_weight')->nullable()->name('負重限制(公斤)');
            $table->float('limit_voltage')->nullable()->name('電壓限制');
            $table->string('limit_volume',100)->nullable()->name('體積限制');
            $table->string('memo',100)->nullable()->name('備註說明');
            $table->tinyInteger('status')->name('資料狀態');
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
        Schema::dropIfExists('smartpole_type_attached');
    }
}
