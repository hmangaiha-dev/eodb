<?php

use App\Utils\PostingStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('office_id');

            $table->date('joining_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->string('remark')->nullable();

            $table->enum('status', PostingStatus::STATUSES)->default(PostingStatus::ON_DUTY);
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
        Schema::dropIfExists('staff_postings');
    }
}
