<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordRightsManagementApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rights_managements', function (Blueprint $table) {
            $table->id();
            $table->string('super_admin')->nullable();
            $table->string('sales_manager')->nullable();
            $table->string('marketing_manager')->nullable();
            $table->string('service_coordinator')->nullable();
            $table->string('admin_asst')->nullable();
            $table->string('fsr')->nullable();
            $table->string('micro_analyst')->nullable();
            $table->string('pchem_analyst')->nullable();
            $table->string('micro_manager')->nullable();
            $table->string('pchem_manager')->nullable();
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
        Schema::dropIfExists('rights_management');
    }
}
