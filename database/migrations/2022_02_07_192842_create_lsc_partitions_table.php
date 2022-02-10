<?php

use App\Models\Application;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLscPartitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lsc_partitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('kum');
            $table->string('caste');
            // $table->bigInteger('application_id');
            $table->foreignIdFor(Application::class, 'application_id');
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
        Schema::dropIfExists('lsc_partitions');
    }
}
