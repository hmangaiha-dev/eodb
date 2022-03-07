<?php

use App\Models\PartF;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmissionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emission_data', function (Blueprint $table) {
            $table->id();
            $table->string('capacity_ton')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('fuel_quantity')->nullable();
            $table->string('agl')->nullable();
            $table->string('arl')->nullable();
            $table->string('control_device')->nullable();
            $table->string('boiler_rating')->nullable();
            $table->string('stream_pressure')->nullable();
            $table->string('capacity_lt')->nullable();
            $table->foreignIdFor(PartF::class,'part_f_id');
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
        Schema::dropIfExists('emission_data');
    }
}
