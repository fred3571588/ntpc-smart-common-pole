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
        Schema::rename('attached_device_cost','attached_device_costs');
        Schema::rename('document','documents');
        Schema::rename('leaseRequisition','lease_requisitions');
        Schema::rename('leaseRequisition_extend','lease_requisition_extends');
        Schema::rename('leaseRequisition_file','lease_requisition_files');
        Schema::rename('leaseRequisition_pole','lease_requisition_poles');
        Schema::rename('leaseRequisition_report_attached','lease_requisition_report_attacheds');
        Schema::rename('leaseRequisition_report_attached_file','lease_requisition_report_attached_files');
        Schema::rename('leaseRequisition_report_attached_photo','lease_requisition_report_attached_photos');
        Schema::rename('leaseRequisition_state','lease_requisition_states');
        Schema::rename('leaseRequisition_state_record','lease_requisition_state_records');
        Schema::rename('rented','renteds');
        Schema::rename('rented_extend','rented_extends');
        Schema::rename('rented_file','rented_files');
        Schema::rename('rented_pole','rented_poles');
        Schema::rename('rented_report_attached','rented_report_attacheds');
        Schema::rename('rented_report_attached_file','rented_report_attached_files');
        Schema::rename('rented_report_attached_photo','rented_report_attached_photos');
        Schema::rename('rented_report_remove','rented_report_removes');
        Schema::rename('rented_report_remove_file','rented_report_remove_files');
        Schema::rename('rented_report_remove_photo','rented_report_remove_photos');
        Schema::rename('rented_state','rented_states');
        Schema::rename('rented_state_record','rented_state_records');
        Schema::rename('smartpole_photo','smart_pole_photos');
        Schema::rename('smartpole_type_attached_device','smart_pole_type_attached_devices');
        Schema::rename('smartpole_type_file','smart_pole_type_file');
        Schema::rename('user_log_operation','user_log_operations');
        Schema::rename('user_permission','user_permissions');
        Schema::rename('user_token','user_tokens');
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
