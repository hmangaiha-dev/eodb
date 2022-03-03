<?php

use App\Models\PartA;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('din_details', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('qualification')->nullable();
            $table->string('association_year')->nullable();
            $table->string('experience_year')->nullable();
            $table->foreignIdFor(PartA::class,'part_a_id');
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
        Schema::dropIfExists('din_details');
    }
}
