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
        Schema::rename('smart_pole_type_file','smart_pole_type_files');
        Schema::table('announcements', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->comment('user');
        });
        Schema::table('attached_device_costs', function (Blueprint $table) {
            $table->unsignedBigInteger('attached_device_id')->nullable()->comment('attached_device');
        });
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('announcement_id')->nullable()->comment('announcement');
        });
        Schema::table('lease_requisitions', function (Blueprint $table) {
            $table->unsignedBigInteger('leaser_id')->nullable()->comment('leaser');
        });
        Schema::table('lease_requisition_extends', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_id')->nullable()->comment('lease_requisition');
        });
        Schema::table('lease_requisition_files', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_id')->nullable()->comment('lease_requisition');
        });
        Schema::table('lease_requisition_poles', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_id')->nullable()->comment('lease_requisition');
        });
        Schema::table('lease_requisition_report_attacheds', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_id')->nullable()->comment('lease_requisition');
        });
        Schema::table('lease_requisition_report_attached_files', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_report_attached_id')->nullable()->comment('lease_requisition_report_attached_');
        });
        Schema::table('lease_requisition_report_attached_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_report_attached_id')->nullable()->comment('lease_requisition_report_attached_');
        });
        Schema::table('lease_requisition_states', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_id')->nullable()->comment('lease_requisition');
        });
        Schema::table('lease_requisition_state_records', function (Blueprint $table) {
            $table->unsignedBigInteger('lease_requisition_state_id')->nullable()->comment('lease_requisition_state');
        });
        Schema::table('loops', function (Blueprint $table) {
            $table->unsignedBigInteger('switch_box_id')->nullable()->comment('switch_box');
        });
        Schema::table('renteds', function (Blueprint $table) {
            $table->unsignedBigInteger('leaser_id')->nullable()->comment('leaser');
        });
        Schema::table('rented_files', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_id')->nullable()->comment('rented');
        });
        Schema::table('rented_poles', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_id')->nullable()->comment('rented');
        });
        Schema::table('rented_report_attacheds', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_id')->nullable()->comment('rented');
        });
        Schema::table('rented_report_attached_files', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_report_attached_id')->nullable()->comment('rented_report_attached');
        });
        Schema::table('rented_report_attached_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_report_attached_id')->nullable()->comment('rented_report_attached');
        });
        Schema::table('rented_report_removes', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_id')->nullable()->comment('rented');
        });
        Schema::table('rented_report_remove_files', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_report_remove_id')->nullable()->comment('rented_report_remove');
        });
        Schema::table('rented_report_remove_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_report_remove_id')->nullable()->comment('rented_report_remove');
        });
        Schema::table('rented_states', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_id')->nullable()->comment('rented');
        });
        Schema::table('rented_state_records', function (Blueprint $table) {
            $table->unsignedBigInteger('rented_state_id')->nullable()->comment('rented_state');
        });
        Schema::table('smart_pole_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('smart_pole_id')->nullable()->comment('smart_pole');
        });
        Schema::table('smart_pole_type_attached_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('smart_pole_type_attached_id')->nullable()->comment('smart_pole_type_attached');
        });
        Schema::table('smart_pole_type_files', function (Blueprint $table) {
            $table->unsignedBigInteger('smart_pole_type_id')->nullable()->comment('smart_pole_type');
        });
        Schema::table('switch_boxes', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id')->nullable()->comment('area');
        });
        Schema::table('user_tokens', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->comment('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
