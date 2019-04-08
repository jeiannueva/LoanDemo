<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class LoanRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Determine if the user is authorized here.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lender_id' => 'required',
            'loaner_id' => 'required',
            'loan_amount' => 'required',
            'amount_paid' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ];
    }
}
