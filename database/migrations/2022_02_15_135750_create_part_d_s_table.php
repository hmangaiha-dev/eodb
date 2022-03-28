<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('project_sector')->nullable();
            $table->string('project_purpose')->nullable();
            $table->string('industry_size')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_category')->nullable();
            $table->string('foreign_investor_name')->nullable();
            $table->string('foreign_investor_country')->nullable();
            $table->string('foreign_investor_address')->nullable();
            $table->string('detail_project_report')->nullable();
            $table->foreignIdFor(CommonApplication::class, 'common_id');
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
        Schema::dropIfExists('part_d_s');
    }
}
