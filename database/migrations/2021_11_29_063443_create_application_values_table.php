<?php

use App\Models\Application;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_values', function (Blueprint $table) {
            $table->id();
            $table->string('field_key')->nullable();
            $table->string('field_value')->nullable();
            $table->text('field_label')->nullable();
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
        Schema::dropIfExists('application_values');
    }
}
