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
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('lender_id')->unsigned();
            $table->bigInteger('loaner_id')->unsigned();
            $table->foreign('lender_id')->references('id')->on('users');; // Create lender ID
            $table->foreign('loaner_id')->references('id')->on('users');; // Create loaner ID
            $table->decimal('loan_amount'); // Original Loan Cost
            $table->decimal('amount_paid'); // Amount paid
            $table->dateTime('due_date'); // Deadline
            $table->bigInteger('status')->unsigned(); //Loan Status
            $table->foreign('status')->references('id')->on('loan_status');
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
