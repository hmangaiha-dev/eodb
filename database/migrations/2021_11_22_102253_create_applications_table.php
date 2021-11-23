<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_code');
            $table->string('regn_no')->unique();
            $table->string('current_state')->default('submitted');
            $table->string('remark')->nullable();

            $table->json('fields')->nullable();

            $table->unsignedInteger('application_profile_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('department_id');

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
        Schema::dropIfExists('applications');
    }
}
