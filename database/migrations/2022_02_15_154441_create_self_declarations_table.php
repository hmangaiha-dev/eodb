<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_declarations', function (Blueprint $table) {
            $table->id();
            $table->string('declaration_signature')->nullable();
            $table->string('declaration_applicant_name')->nullable();
            $table->string('declaration_application_date')->nullable();
            $table->string('declaration_designation')->nullable();
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
        Schema::dropIfExists('self_declarations');
    }
}
