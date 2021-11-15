<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidyOnPowerLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidy_on_power_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained( );
            $table->json('body');
            $table->string('obligatory_certificate');
            $table->string('completion_certificate')->nullable();
            $table->string('training_expenditure')->nullable();
            
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('subsidy_on_power_lines');
    }
}
