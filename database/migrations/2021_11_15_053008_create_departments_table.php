<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('dept_name');
            $table->string('dept_code')->unique();
            $table->string('slug')->unique();

            $table->string('sect_name')->nullable();
            $table->string('dict_name')->nullable();
            $table->text('info')->nullable();
            $table->text('about_us')->nullable();
            $table->text('act_rules')->nullable();
            $table->text('other_info')->nullable();

            $table->softDeletes();


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
        Schema::dropIfExists('departments');
    }
}
