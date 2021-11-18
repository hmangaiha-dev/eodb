<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            // $table->foreignId('department_id')->constrained('departments');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('code');
            $table->string('how_to_apply')->default('test')->nullable();
            $table->string('name')->default('test')->nullable();
            $table->string('who_can_apply')->default('test')->nullable();
            $table->string('required_documents')->default('test')->nullable();
            $table->string('timeline')->default('test')->nullable();
            $table->string('fees')->default('test')->nullable();
            $table->string('download_form')->default('test')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
