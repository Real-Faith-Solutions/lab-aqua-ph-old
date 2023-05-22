<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewOthersToAnalysisRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analysis_requests', function (Blueprint $table) {
            $table->string('water_purpose_others')->nullable();
            $table->string('source_water_sample_others')->nullable();
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
            $table->dropColumn('water_purpose_others');
            $table->dropColumn('source_water_sample_others');
        });
    }
}
