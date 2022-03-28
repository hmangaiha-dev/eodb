<?php

use App\Models\CommonApplication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_type')->nullable();
            $table->string('applicant_photo')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('applicant_caste')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city_town')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alt_email')->nullable();
            $table->string('prop_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('enterprise_name')->nullable();
            $table->string('enterprise_type')->nullable();
            $table->string('total_directors')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('aadhaar_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('is_applicant_nri')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('tin_cert')->nullable();
            $table->string('cst_no')->nullable();
            $table->string('cst_cert')->nullable();
            $table->string('mou_deed')->nullable();
            $table->string('company_reg_cert')->nullable();
            $table->string('udyog_memorandum')->nullable();
            $table->foreignIdFor(CommonApplication::class,'common_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('part_a_s');
    }
}
