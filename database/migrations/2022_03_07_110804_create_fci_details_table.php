<?php

use App\Models\PartE;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFciDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fci_details', function (Blueprint $table) {
            $table->id();
            $table->string('phase')->nullable();
            $table->string('product_category')->nullable();
            $table->string('fci')->nullable();
            $table->string('implementation_date')->nullable();
            $table->foreignIdFor(PartE::class,'part_e_id');
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
        Schema::dropIfExists('fci_details');
    }
}
