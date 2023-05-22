<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLabApprovalIdToLabAcceptancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lab_acceptances', function (Blueprint $table) {
            $table->string('lab_approval_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lab_acceptances', function (Blueprint $table) {
            $table->dropColumn('lab_approval_id');
        });
    }
}
