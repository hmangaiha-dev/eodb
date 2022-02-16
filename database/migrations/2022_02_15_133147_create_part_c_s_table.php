<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('choose_applicable')->nullable();
            $table->string('certified_copy_owner')->nullable();
            $table->string('certified_lease_doc')->nullable();
            $table->string('certified_rent_deed')->nullable();
            $table->string('noc_owner')->nullable();
            $table->string('site_layout_plan')->nullable();
            $table->string('linear_strip_plan')->nullable();
            $table->foreignIdFor(CommonApplication::class,'common_id');
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
        Schema::dropIfExists('part_c_s');
    }
}
