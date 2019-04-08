<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lender_id'); //Lender ID
            $table->integer('loaner_id'); //Loaner ID
            $table->decimal('loan_amount'); // Original Loan Cost
            $table->decimal('amount_paid'); // Amount paid
            $table->dateTime('due_date'); // Deadline
            $table->integer('status'); //Loan Status
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
        Schema::dropIfExists('loan_request');
    }
}
