<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('electric_temporary_load_required')->nullable();
            $table->string('electric_temporary_existing_connection')->nullable();
            $table->string('electric_temporary_existing_connection_file')->nullable();
            $table->string('electric_temporary_consumer_number')->nullable();
            $table->string('electric_temporary_existing_load_demand_kw')->nullable();
            $table->string('electric_temporary_existing_load_demand_kva')->nullable();
            $table->string('electric_temporary_new_load_demand_kw')->nullable();
            $table->string('electric_temporary_new_load_demand_kVa')->nullable();
            $table->string('electric_temporary_demand_date')->nullable();
            $table->string('electric_regular_load_required')->nullable();
            $table->string('electric_regular_existing_connection')->nullable();
            $table->string('electric_regular_existing_connection_file')->nullable();
            $table->string('electric_regular_consumer_type')->nullable();
            $table->string('electric_regular_consumer_number')->nullable();
            $table->string('electric_regular_existing_load_demand_kw')->nullable();
            $table->string('electric_regular_existing_load_demand_kva')->nullable();
            $table->string('electric_regular_new_load_demand_kw')->nullable();
            $table->string('electric_regular_new_load_demand_kva')->nullable();
            $table->string('electric_regular_demand_date')->nullable();
            $table->string('water_temporary_connection_required')->nullable();
            $table->string('water_temporary_existing_connection')->nullable();
            $table->string('water_temporary_existing_bill_copy_file')->nullable();
            $table->string('water_regular_connection_required')->nullable();
            $table->string('water_regular_existing_connection')->nullable();
            $table->string('water_regular_existing_bill_copy_file')->nullable();
            $table->string('water_regular_consumer_type')->nullable();
            $table->string('water_consumer_number')->nullable();
            $table->foreignIdFor(CommonApplication::class, 'common_id');
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
        Schema::dropIfExists('part_g_s');
    }
}
