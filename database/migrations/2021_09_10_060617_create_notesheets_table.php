<?php

use App\Models\Staff;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notesheets', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("NA");
            $table->text('body')->nullable();
            $table->morphs('noteable');

            $table->foreignIdFor(Staff::class,'staff_id');
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
        Schema::dropIfExists('notesheets');
    }
}
