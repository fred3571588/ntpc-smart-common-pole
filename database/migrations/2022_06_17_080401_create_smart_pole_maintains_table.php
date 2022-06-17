<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smart_pole_maintains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('smart_pole_id')->comment('smart_pole');
            $table->boolean('pole_appearance')->comment('燈桿外觀');
            $table->boolean('pole_base')->comment('燈桿(結構)基座');
            $table->boolean('ground_wire')->comment('接地線');
            $table->boolean('ballsat')->comment('安定器');
            $table->boolean('cover')->comment('蓋板');
            $table->boolean('power_supply')->comment('電源供應');
            $table->boolean('concealed_conduit_power_supply')->comment('暗導管線供電');
            $table->boolean('electric_wire_overhead_wire')->comment('電纜線架線');
            $table->boolean('PVC_wire')->comment('PVC線架線');
            $table->boolean('earth_leakage_circuit_breaker_and_non-fuse_switch')->comment('漏電斷路器兼無融絲開關');
            $table->float('ground_resistance')->comment('接地電阻檢測(歐姆)');
            $table->boolean('report')->comment('電阻檢測絕緣缺失報告');
            $table->float('line_insulation_resistance')->comment('線路絕緣阻值');
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
        Schema::dropIfExists('smart_pole_maintains');
    }
};
