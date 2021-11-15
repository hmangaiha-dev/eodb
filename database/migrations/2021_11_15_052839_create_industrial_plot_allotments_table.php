<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrialPlotAllotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrial_plot_allotments', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->json('body');
            $table->string('signature')->nullable();
            $table->string('copy_of_memorandum')->nullable();
            $table->string('copy_of_ID')->nullable();
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
        Schema::dropIfExists('industrial_plot_allotments');
    }
}
