<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_movements', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('application_id');
            $table->unsignedInteger('recipient');
            $table->unsignedInteger('sender')->nullable();
            $table->integer('step')->default(0);

            $table->string('remark')->nullable();
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
        Schema::dropIfExists('application_movements');
    }
}
