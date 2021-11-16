<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_banks', function (Blueprint $table) {
            $table->id();
            $table->string('key_name');
            $table->string('key_value');
            $table->string('key_type')->default('text');
            $table->unsignedBigInteger('application_id');
            // $table->foreignId('department_id')->constrained('departments');
            $table->foreign('application_id')->references('id')->on('applications');
            // $table->foreignId('application_type');
            $table->string('default_value')->nullable();
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
        Schema::dropIfExists('key_banks');
    }
}
