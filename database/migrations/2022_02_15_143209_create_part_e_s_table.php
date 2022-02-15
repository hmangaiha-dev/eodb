<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('land_cost')->nullable();
            $table->string('building_cost')->nullable();
            $table->string('plant_machinery_cost')->nullable();
            $table->string('misc_cost')->nullable();
            $table->string('total_project_cost')->nullable();
            $table->string('bank_finance')->nullable();
            $table->string('equity_contribution')->nullable();
            $table->string('foreign_direct_invest')->nullable();
            $table->string('subsidy_grant')->nullable();
            $table->string('other_means')->nullable();
            $table->string('direct_male')->nullable();
            $table->string('direct_female')->nullable();
            $table->string('indirect_male')->nullable();
            $table->string('indirect_female')->nullable();
            $table->string('total_male')->nullable();
            $table->string('total_female')->nullable();
            $table->string('project_start')->nullable();
            $table->string('commercial_start')->nullable();
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
        Schema::dropIfExists('part_e_s');
    }
}
