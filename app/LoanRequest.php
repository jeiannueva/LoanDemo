<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class LoanRequest extends Model
{
    
    public $timestamps = true;

    protected $fillable = [
        'lender_id', 'loaner_id', 'loan_amount', 'amount_paid', 'due_date', 'status', 
    ];

    public function lender_id(){
        return $this->belongsTo('App\User');
    }

    public function loaner_id(){
        return $this->belongsTo('App\User');
    }
}
