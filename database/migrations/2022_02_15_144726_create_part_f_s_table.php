<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_f_s', function (Blueprint $table) {
            $table->id();
            $table->string('manuf_process_flow')->nullable();
            $table->string('manuf_process_steps')->nullable();
            $table->string('env_category')->nullable();
            $table->string('water_supply_source')->nullable();
            $table->string('water_usage_per_day_process')->nullable();
            $table->string('water_usage_per_day_cooling')->nullable();
            $table->string('water_usage_per_day_domestic')->nullable();
            $table->string('water_usage_per_day_others')->nullable();
            $table->string('water_water_gen_per_day_process')->nullable();
            $table->string('water_water_gen_per_day_cooling')->nullable();
            $table->string('water_water_gen_per_day_domestic')->nullable();
            $table->string('water_water_gen_per_day_others')->nullable();
            $table->string('water_water_treatment_process')->nullable();
            $table->string('water_water_treatment_cooling')->nullable();
            $table->string('water_water_treatment_domestic')->nullable();
            $table->string('water_water_treatment_others')->nullable();
            $table->string('waste_water_treatment_details')->nullable();
            $table->string('disposal_mode')->nullable();
            $table->string('trees_cut_no')->nullable();
            $table->string('bamboo_groves_remove_no')->nullable();
            $table->string('replantation_plan')->nullable();
            $table->string('need_clearance')->nullable();
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
        Schema::dropIfExists('part_f_s');
    }
}
