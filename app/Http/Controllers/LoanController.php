<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanRequestRequest;
use App\LoanRequest;

class LoanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Make sure that this controller is only accepts authorized.
    }

    public function index(){
       return view('loans/home'); //Return the view only. No changes required
    }

    public function add(){
       return view('loans/request'); //Return new loan only. No changes required
    }

    public function processadd(LoanRequestRequest $request){
        LoanRequest::create($request->validated());
        return back()->with('status', 'Successful create operation.');
    }

    public function edit($loanid){
        $loan = LoanRequest::find($loanid);
        
        if($loan == null){
            return back()->with('status', 'No data found');
        }else{
            return $loan;
        }
        
        //return view('loans.request')->with('loan', $loan);
    }

    public function processedit(LoanRequestRequest $request){
        //Function to be created after view
    }

    public function check(Request $request){
        return LoanRequest::find(1); //View required
    }

    public function delete(Request $request){
        LoanRequest::find($request->id)->delete();
    }

    public function harddelete(Request $request){
        LoanRequest::find($request->id)->forcedelete();
    }
}