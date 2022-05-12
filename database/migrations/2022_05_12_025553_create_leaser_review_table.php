<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaserReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaser_review', function (Blueprint $table) {
            $table->id();
            $table->string('account')->name('帳號');
            $table->string('file_name',20)->name('檔案名稱');
            $table->string('file_path',100)->name('檔案位置');
            $table->boolean('pass')->name('是否通過');
            $table->dateTime('authorize_time')->name('通過時間');
            $table->bigInteger('authorize_by')->name('審核人員');
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
        Schema::dropIfExists('leaser_reviews');
    }
}
