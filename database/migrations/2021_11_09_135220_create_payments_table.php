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
            $table->id()->startingValue(int_random(5));
            $table->morphs('user');
            $table->string('gateway_name');
            $table->string('gateway_reference')->nullable();
            $table->string('status');
            $table->timestamp('paid_at')->nullable();
            $table->unsignedBigInteger('amount_paid');
            $table->string('currency');
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
