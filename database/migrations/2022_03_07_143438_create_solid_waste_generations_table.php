<?php

use App\Models\PartF;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolidWasteGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solid_waste_generations', function (Blueprint $table) {
            $table->id();
            $table->string('source_generation')->nullable();
            $table->string('nature_type')->nullable();
            $table->string('quantity_ton')->nullable();
            $table->string('disposal_mode')->nullable();
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
        Schema::dropIfExists('solid_waste_generations');
    }
}
