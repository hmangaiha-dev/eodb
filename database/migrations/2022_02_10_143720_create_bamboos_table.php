<?php

use App\Models\Application;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBamboosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bamboos', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('species')->nullable();
            $table->string('nos')->nullable();
            $table->string('total_bamboo')->nullable();
            $table->string('total_mature')->nullable();
            // $table->bigInteger('application_id')->nullable();
            $table->foreignIdFor(Application::class, 'application_id')->nullable();
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
        Schema::dropIfExists('bamboos');
    }
}
