<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('account_name')->nullable();
            $table->string('business_tin')->nullable();
            $table->string('name_of_owner')->nullable();
            $table->string('type_of_ownership')->nullable();
            $table->string('name_of_authorized_person')->nullable();
            $table->string('unit_no_floor_bldg_name')->nullable();
            $table->string('street_name_or_subdivision')->nullable();
            $table->string('barangay_name')->nullable();
            $table->string('municipality_or_city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('province')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('preferred_model_of_contract')->nullable();
            $table->string('fsr_assigned')->nullable();
            $table->string('market_segment')->nullable();
            $table->string('no_of_microbiology_samples')->nullable();
            $table->string('sample_collection_frequency_micro')->nullable();
            $table->string('no_of_physico_chemical_samples')->nullable();
            $table->string('sample_collection_frequency_pchem')->nullable();
            $table->string('assigned_week')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('client');
    }
}
