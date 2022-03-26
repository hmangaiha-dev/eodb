<?php

use App\Models\PartF;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufactureDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacture_details', function (Blueprint $table) {
            $table->id();
            $table->string('raw_material')->nullable();
            $table->string('raw_quantity')->nullable();
            $table->string('units_ton_per_day')->nullable();
            $table->string('main_product')->nullable();
            $table->string('main_product_quantity')->nullable();
            $table->string('units_number_per_day')->nullable();
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
        Schema::dropIfExists('manufacture_details');
    }
}
