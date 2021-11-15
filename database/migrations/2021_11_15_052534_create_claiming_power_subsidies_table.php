<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimingPowerSubsidiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claiming_power_subsidies', function (Blueprint $table) {
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
        Schema::dropIfExists('claiming_power_subsidies');
    }
}
