<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOthersToAnalysisRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analysis_requests', function (Blueprint $table) {
            $table->string('collection_point_others')->nullable();
            $table->string('sampling_location_address_others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('analysis_requests', function (Blueprint $table) {
            $table->dropColumn('collection_point_others');
            $table->dropColumn('sampling_location_address_others');
        });
    }
}
