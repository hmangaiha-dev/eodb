<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('office_id');
            $table->date('joining_date');
            $table->date('leaving_date')->nullable();
            $table->string('remark')->nullable();
            $table->enum('status', ['on-duty', 'pensioned'])->default('on-duty');
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
        Schema::dropIfExists('staff_posts');
    }
}
