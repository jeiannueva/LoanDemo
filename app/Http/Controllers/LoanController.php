<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        //Create a view first
    }

    public function processadd(Request $request){
        //Function to be created after view
    }

    public function edit(){
        //Create a view first
    }

    public function processedit(Request $request){
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
