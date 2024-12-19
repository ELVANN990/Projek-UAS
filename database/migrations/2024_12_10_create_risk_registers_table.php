<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('risk_registers', function (Blueprint $table) {
            $table->id();
            $table->string('objective');
            $table->string('process_event');
            $table->string('risk_category');
            $table->string('risk_code');
            $table->text('risk_description');
            $table->string('risk_source');
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('qualitative');
            $table->string('risk_owner');
            $table->string('name_dept');
            $table->integer('likelihood');
            $table->integer('impact');
            $table->integer('risk_level');
            $table->enum('existing_control', ['Ada', 'Tidak Ada']);
            $table->enum('control_effectiveness', ['Memadai', 'Belum memadai']);
            $table->string('control_description');
            $table->integer('residual_likelihood');
            $table->integer('residual_impact');
            $table->integer('residual_risk_level');
            $table->string('risk_treatment');
            $table->string('mitigation_plan');
            $table->integer('target_likelihood');
            $table->integer('target_impact');
            $table->integer('target_risk_level');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('risk_registers');
    }
};

