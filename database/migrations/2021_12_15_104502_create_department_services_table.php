<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->nullable();
            // $table->string('slug')->nullable();
            $table->text('service_name')->nullable();
            $table->text('who_should_apply')->nullable();
            $table->text('how_to_apply')->nullable();
            $table->text('document_to_submit')->nullable();
            $table->string('timeline')->nullable();
            $table->string('fees')->nullable();
            $table->string('path')->nullable();
            $table->string('sample_form')->nullable();
            $table->string('operational_type')->default('PRE-ESTABLISHMENT')->nullable();
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
        Schema::dropIfExists('department_services');
    }
}
