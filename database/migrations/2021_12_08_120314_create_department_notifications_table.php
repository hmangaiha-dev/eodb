<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('department_id')->nullable();
            $table->string('notification_no')->nullable();
            $table->string('subject')->nullable();
            $table->string('issuing_authority')->nullable();
            $table->string('notification_file')->nullable();
            $table->date('notification_date')->nullable();
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
        Schema::dropIfExists('department_notifications');
    }
}
