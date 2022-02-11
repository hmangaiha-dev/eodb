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
            $table->string('year');
            $table->string('species');
            $table->string('nos');
            $table->string('total_bamboo');
            $table->string('total_mature');
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
        Schema::dropIfExists('bamboos');
    }
}
