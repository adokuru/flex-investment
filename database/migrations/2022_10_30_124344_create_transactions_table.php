<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->unsignedBigInteger('wallet_id')->nullable();
            $table->unsignedBigInteger('investment_plan_id')->nullable();
            $table->unsignedBigInteger('deposit_id')->nullable();
            $table->unsignedBigInteger('withdrawal_id')->nullable();
            $table->foreignId('transaction_type_id')->constrained();
            $table->string('currency');
            $table->decimal('amount', 18, 8);
            $table->string('status')->default(0);
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
        Schema::dropIfExists('transactions');
    }
};
