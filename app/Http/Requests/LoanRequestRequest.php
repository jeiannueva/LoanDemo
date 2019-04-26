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
            'lender_id' => 'required|exists:users,id',
            'loaner_id' => 'required|exists:users,id',
            'loan_amount' => 'required|min:0',
            'amount_paid' => 'required|min:0',
            'due_date' => 'required',
            'status' => 'required|exists:loan_status,id'
        ];
    }
}
