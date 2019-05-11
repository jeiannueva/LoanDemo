<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanRequestRequest;
use App\LoanRequest;
use DB;
use Auth;

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
        $user = DB::table('users')->where('id', Auth::id())->pluck('isLending');

       return view('loans/home', ['isLending' => $user]);
    }

    public function togglelending(Request $request){
       $skips = ["[","]","\""];
       $isLending = str_replace($skips, ' ', DB::table('users')->where('id', Auth::id())->pluck('isLending'));

       if ($isLending == 0) {
            DB::table('users')
                ->where('id', Auth::id())
                ->update(['isLending' => 1]);
           return back()->with('status', 'Successfully turned on Lending.');
       }elseif ($isLending == 1) {
           DB::table('users')
                ->where('id', Auth::id())
                ->update(['isLending' => 0]);
           return back()->with('status', 'Successfully turned off Lending.');
       }
    }

    public function add(){
            $users = DB::table('users')->where('isLending', 1)->where('id', '<>', Auth::id())->get();

        return view('loans/request', ['users' => $users]);
       //return view('loans/request'); //Return new loan only. No changes required
    }

    public function processadd(LoanRequestRequest $request){
        LoanRequest::create($request->validated());
        return back()->with('status', 'Request Submitted to Lender.');
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
