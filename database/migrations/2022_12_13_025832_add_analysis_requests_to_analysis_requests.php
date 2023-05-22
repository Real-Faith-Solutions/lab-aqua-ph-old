<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnalysisRequestsToAnalysisRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analysis_requests', function (Blueprint $table) {
            $table->string('mcr2_bg_24h' ,20)->nullable();
            $table->string('mcr2_bg_48h',20)->nullable();
            $table->string('micr2_fc_24h',20)->nullable();
            $table->string('micr2_fc_total',20)->nullable();
            $table->string('mcr2_tc_remarks',20)->nullable();
            $table->string('micr3_tc_24h',20)->nullable();
            $table->string('mcr3_tc_48h',20)->nullable();
            $table->string('mcr3_tc_total',20)->nullable();
            $table->string('mcr3_tc_remarks',20)->nullable();
            $table->string('micr4_results',20)->nullable();
            $table->string('mcr4_remarks',20)->nullable();
            $table->string('chem1_final',20)->nullable();
            $table->string('chem1_remarks',20)->nullable();
            $table->string('chem2_result',20)->nullable();
            $table->string('chem2_remarks',20)->nullable();
            $table->string('chem3_result',20)->nullable();
            $table->string('chem3_remarks',20)->nullable();
            $table->string('chem4_result',20)->nullable();
            $table->string('chem4_remarks',20)->nullable();
            $table->string('chem6_result',20)->nullable();
            $table->string('chem6_remarks',20)->nullable();
            $table->string('chem5_result',20)->nullable();
            $table->string('chem5_remarks',20)->nullable();
            $table->string('color_of_the_sample',20)->nullable();
            $table->string('fluorescence',20)->nullable();
            $table->string('reading_chem1_1',20)->nullable();
            $table->string('reading_chem1_2',20)->nullable();
            $table->string('reading_chem1_3',20)->nullable();
            $table->string('reading_chem2_1',20)->nullable();
            $table->string('reading_chem2_2',20)->nullable();
            $table->string('reading_chem2_3',20)->nullable();
            $table->string('iwoedr1_chem3',20)->nullable();
            $table->string('fwoedr1_chem3',20)->nullable();
            $table->string('worr1_chem3',20)->nullable();
            $table->string('iwofedr2_chem3',20)->nullable();
            $table->string('fwofedr2_chem3',20)->nullable();
            $table->string('worr2_chem3',20)->nullable();
            $table->string('ir_chem4',20)->nullable();
            $table->string('ir1_chem5',20)->nullable();
            $table->string('ir2_chem5',20)->nullable();
            $table->string('ir3_chem5',20)->nullable();
            $table->string('ir1_chem6',20)->nullable();
            $table->string('ir2_chem6',20)->nullable();
            $table->string('ir3_chem6',20)->nullable();
            $table->string('ir1_chem7',20)->nullable();
            $table->string('ir2_chem7',20)->nullable();
            $table->string('ir3_chem7',20)->nullable();
            $table->string('chem7_result',20)->nullable();
            $table->string('chem7_remarks',20)->nullable();
            $table->string('ir1_chem9',20)->nullable();
            $table->string('ir2_chem9',20)->nullable();
            $table->string('ir3_chem9',20)->nullable();
            $table->string('chem9_result',20)->nullable();
            $table->string('chem9_remarks',20)->nullable();
            $table->string('ir1_chem10',20)->nullable();
            $table->string('ir2_chem10',20)->nullable();
            $table->string('ir3_chem10',20)->nullable();
            $table->string('chem10_result',20)->nullable();
            $table->string('chem10_remarks',20)->nullable();
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
            $table->dropColumn('mcr2_bg_24h');
            $table->dropColumn('mcr2_bg_48h');
            $table->dropColumn('micr2_fc_24h');
            $table->dropColumn('micr2_fc_total');
            $table->dropColumn('mcr2_tc_remarks');
            $table->dropColumn('micr3_tc_24h');
            $table->dropColumn('mcr3_tc_48h');
            $table->dropColumn('mcr3_tc_total');
            $table->dropColumn('mcr3_tc_remarks');
            $table->dropColumn('micr4_results');
            $table->dropColumn('mcr4_remarks');
            $table->dropColumn('chem1_final');
            $table->dropColumn('chem1_remarks');
            $table->dropColumn('chem2_result');
            $table->dropColumn('chem2_remarks');
            $table->dropColumn('chem3_result');
            $table->dropColumn('chem3_remarks');
            $table->dropColumn('chem4_result');
            $table->dropColumn('chem4_remarks');
            $table->dropColumn('chem5_result');
            $table->dropColumn('chem5_remarks');
            $table->dropColumn('color_of_the_sample');
            $table->dropColumn('fluorescence');
            $table->dropColumn('reading_chem1_1');
            $table->dropColumn('reading_chem1_2');
            $table->dropColumn('reading_chem1_3');
            $table->dropColumn('reading_chem2_1');
            $table->dropColumn('reading_chem2_2');
            $table->dropColumn('reading_chem2_3');
            $table->dropColumn('iwoedr1_chem3');
            $table->dropColumn('fwoedr1_chem3');
            $table->dropColumn('worr1_chem3');
            $table->dropColumn('iwofedr2_chem3');
            $table->dropColumn('fwofedr2_chem3');
            $table->dropColumn('worr2_chem3');
            $table->dropColumn('ir_chem4');
            $table->dropColumn('ir1_chem5');
            $table->dropColumn('ir2_chem5');
            $table->dropColumn('ir3_chem5');
            $table->dropColumn('ir1_chem6');
            $table->dropColumn('ir2_chem6');
            $table->dropColumn('ir3_chem6');
            $table->dropColumn('chem6_result');
            $table->dropColumn('chem6_remarks');
            $table->dropColumn('ir1_chem7');
            $table->dropColumn('ir2_chem7');
            $table->dropColumn('ir3_chem7');
            $table->dropColumn('chem7_result');
            $table->dropColumn('chem7_remarks');
            $table->dropColumn('ir1_chem9');
            $table->dropColumn('ir2_chem9');
            $table->dropColumn('ir3_chem9');
            $table->dropColumn('chem9_result');
            $table->dropColumn('chem9_remarks');
            $table->dropColumn('ir1_chem10');
            $table->dropColumn('ir2_chem10');
            $table->dropColumn('ir3_chem10');
            $table->dropColumn('chem10_result');
            $table->dropColumn('chem10_remarks');
        });
    }
}
