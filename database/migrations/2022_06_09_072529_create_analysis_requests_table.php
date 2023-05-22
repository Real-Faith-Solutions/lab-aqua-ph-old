<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysisRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysis_requests', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('client_id')->nullable();
            $table->string('account_name')->nullable();
            $table->string('unit_no_floor_bldg_name')->nullable();
            $table->string('stree_name_or_subdivision')->nullable();
            $table->string('barangay_name')->nullable();
            $table->string('municipality_or_city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('province')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('collected_by')->nullable();
            $table->string('date_collected')->nullable();
            $table->string('time_collected')->nullable();
            $table->string('last_microbial_testing')->nullable();
            $table->string('market_segment')->nullable();
            $table->string('last_change_of_filter')->nullable();
            $table->string('last_change_of_uv')->nullable();
            $table->string('collection_point')->nullable();
            $table->string('address_of_collection_point')->nullable();
            $table->string('uv_light')->nullable();
            $table->string('chlorinator')->nullable();
            $table->string('faucet_condition_after_disinfection')->nullable();
            $table->string('source_of_water_sample')->nullable();
            $table->string('water_purpose')->nullable();
            $table->string('test_request')->nullable();
            $table->string('customer_representative_name')->nullable();
            $table->string('sample_id')->nullable();
            $table->string('account_id')->nullable();
            $table->string('establishment')->nullable();
            $table->string('estab_same_as_sampling_loc')->nullable();
            $table->string('sampling_location_name')->nullable();
            $table->string('owner')->nullable();
            $table->string('address')->nullable();
            $table->string('add_same_as_sampling_add')->nullable();
            $table->string('sampling_location_address')->nullable();
            $table->string('city')->nullable();
            $table->string('sampling_point')->nullable();
            $table->string('source')->nullable();
            $table->string('type')->nullable();
            $table->string('purpose')->nullable();
            $table->date('date_sampled')->nullable();
            $table->string('time_sampled')->nullable();
            $table->string('sampled_by')->nullable();
            $table->string('date_received')->nullable();
            $table->string('time_received')->nullable();
            $table->string('walk_in')->nullable();
            $table->string('remarks')->nullable();
            $table->string('holding_time')->nullable();
            $table->date('date_tested')->nullable();
            $table->string('time_tested')->nullable();
            $table->string('hpc_a')->nullable();
            $table->string('hpc_b')->nullable();
            $table->string('hpc_ave')->nullable();
            $table->string('hpc_value')->nullable();
            $table->string('difference')->nullable();
            $table->string('tc_24h')->nullable();
            $table->string('tc_48h')->nullable();
            $table->string('bg_24h')->nullable();
            $table->string('bg_48h')->nullable();
            $table->string('fc_24h')->nullable();
            $table->string('analyzed_by')->nullable();
            $table->string('hpc')->nullable();
            $table->string('hpc_remarks')->nullable();
            $table->string('total_coliform')->nullable();
            $table->string('tc_remarks')->nullable();
            $table->string('fecal_caliform')->nullable();
            $table->string('fc_remarks')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('cert_no')->nullable();
            $table->string('test_parameter')->nullable();
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
        Schema::dropIfExists('analysis_requests');
    }
}
