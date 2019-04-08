<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    
    public $timestamps = true;

    protected $fillable = [
        'lender_id', 'loaner_id', 'loan_amount', 'amount_paid', 'due_date', 'status', 
    ];
}
