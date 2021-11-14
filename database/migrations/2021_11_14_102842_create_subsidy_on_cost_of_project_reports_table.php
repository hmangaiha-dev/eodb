<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidyOnCostOfProjectReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidy_on_cost_of_project_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained( );
            $table->json('body');
            $table->string('cost_of_project')->nullable();

           
            
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
        Schema::dropIfExists('subsidy_on_cost_of_project_reports');
    }
}
