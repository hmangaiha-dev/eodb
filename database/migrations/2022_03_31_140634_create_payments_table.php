<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('callback_url');
            $table->string('order_id')->unique();
            $table->string('transaction_id')->nullable();
            $table->string('txn_date')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('payment_mode')->default('credit')->nullable();
            $table->string('amount')->default('0.00');
            $table->string('currency')->default('INR');
            $table->nullableMorphs('owner');
            $table->string('status')->default('initiate'); //failed //success//

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
        Schema::dropIfExists('payments');
    }
}
