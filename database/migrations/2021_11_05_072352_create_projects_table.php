<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('total_investment_limit');
            $table->string('company_unit_name');
            $table->string('designation');
            $table->string('address');
            $table->string('country');
            $table->string('pincode');
            $table->string('email');
            $table->string('mobile');
            $table->boolean('finalized');
            $table->text('project_details');
            $table->string('sector');
            $table->string('district');
            
            $table->string('total_investment');
            $table->boolean('employment');
            $table->date('commencement_date');

            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('land')->nullable();
            $table->string('power_load')->nullable();


            $table->string('status')->default('pending');
            

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
        Schema::dropIfExists('projects');
    }
}
