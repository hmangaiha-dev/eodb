<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimingCentralCaptialInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claiming_central_captial_investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained( );
            $table->json('body');
            $table->string('obligatory_certificate');
            
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
        Schema::dropIfExists('claiming_central_captial_investments');
    }
}
