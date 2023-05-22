<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->id();
            $table->string('add_client_account');
            $table->string('add_analysis_request');
            $table->string('lab_acceptance');
            $table->string('lab_work_order');
            $table->string('lab_result');
            $table->string('analysis_request');
            $table->string('facility');
            $table->string('client_list');
            $table->string('user_list');
            $table->string('roles');
            $table->string('account_name')->nullable();
            $table->string('username')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('users_role');
    }
}
