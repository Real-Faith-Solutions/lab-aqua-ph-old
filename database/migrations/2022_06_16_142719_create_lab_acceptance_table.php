<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabAcceptanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_acceptances', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('test_no')->nullable();
            $table->string('evaluated_by')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('sample_condition')->nullable();
            $table->string('remarks')->nullable();
            $table->string('lab_acceptance_final_remarks')->nullable();
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
        Schema::dropIfExists('lab_acceptance');
    }
}
