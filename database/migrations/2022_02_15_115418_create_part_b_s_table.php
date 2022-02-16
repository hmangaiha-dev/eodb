<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('proposed_plot_requirement');
            $table->string('proposed_industrial_area')->nullable();
            $table->string('proposed_total_proposed_area')->nullable();
            $table->string('proposed_total_built_area')->nullable();
            $table->string('proposed_city_town')->nullable();
            $table->foreignIdFor(CommonApplication::class,'common_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('part_b_s');
    }
}
