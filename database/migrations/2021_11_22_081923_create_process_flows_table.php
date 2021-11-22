<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_flows', function (Blueprint $table) {
            $table->id();
            $table->integer('step')->default(0);
            $table->integer('duration')->default(0);
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('application_profile_id')->default(1);
            $table->json('actions')->nullable();
            $table->string('remark')->nullable();
            $table->boolean('published')->default(false);

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
        Schema::dropIfExists('process_flows');
    }
}
