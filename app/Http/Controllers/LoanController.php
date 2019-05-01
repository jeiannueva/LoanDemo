<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanRequestRequest;
use App\LoanRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    // public function add(){
    //     $users = User::pluck('name','id')->where('id', Auth::id())->pluck('isLending'); //Get all users to set as lender/loaner
    //     $status = DB::table('loan_status')->get(); // No model as this is just status
    //     return view('loans/request', compact('users','status')); //Return new loan only. No changes required

    //    return view('loans/home', ['isLending' => $user]);
    // }

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

    public function edit(Request $request){
        $loan = LoanRequest::find($request->loanid);
        $users = User::pluck('name','id'); //Get all users to set as lender/loaner
        $status = DB::table('loan_status')->get(); // No model as this is just status
        
        if($loan == null)
            return back()->with('status', "Loan could not be found.");
        else if($loan->loaner_id != Auth::id())
            return back()->with('status', "You don't have priveledges to see this");
        else
            return view('loans/request',compact('loan','users','status'));      

    }

    public function processedit(LoanRequestRequest $request){
        $loan = LoanRequest::find($request->id);
        LoanRequest::edit($request);
        return back()->with('status', 'Request has been edited sucessfully');
    }

    public function check(Request $request){
        $loans = LoanRequest::All();
        return view('loans/list',compact('loans'));
    }

    public function delete(Request $request){
        LoanRequest::find($request->loanid)->delete();
        return back()->with('status', 'Data has been deleted sucessfully');
    }

    public function harddelete(Request $request){
        LoanRequest::find($request->loanid)->forcedelete();
        return back()->with('status', 'Data has been purged from database table');
    }
}