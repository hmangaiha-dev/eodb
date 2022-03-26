<?php

use App\Models\Department;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('hod_secratariat_name')->nullable();
            $table->string('hod_secratariat_designation')->nullable();
            $table->string('hod_secratariat_photo')->nullable();
            $table->string('hod_directorate_name')->nullable();
            $table->string('hod_directorate_designation')->nullable();
            $table->string('hod_directorate_photo')->nullable();
            $table->foreignIdFor(Department::class,'dept_id')->nullable();
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
        Schema::dropIfExists('department_profiles');
    }
}
