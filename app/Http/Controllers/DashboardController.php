<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $userBalance = DB::table('users')->where('id', Auth::id())->value('balance');

       $loanRequests = DB::table('users')
            ->join('loan_requests', 'loan_requests.loaner_id', '=', 'users.id')
            ->where('status', 0)
            ->where('lender_id', Auth::id())->get();

        $loanReminders = DB::table('users')
            ->join('loan_requests', 'loan_requests.lender_id', '=', 'users.id')
            ->where('status', 1)->where('loaner_id', Auth::id())->get();

       $getUserName = DB::table('users')->where('id', Auth::id())->value('name');

       //error_log($loanRequests);

       return view('dashboard', compact('userBalance','loanRequests', 'loanReminders'));
    }

    public function process_add_balance(Request $request){
        if(is_numeric($request->input('amount')) && ((double)($request->input('amount')) >= 0)){
            $userBalance = (double)DB::table('users')->where('id', Auth::id())->value('balance');
            $inputAmount = (double)$request->input('amount');

            DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['balance' => ($userBalance + $inputAmount)]);
            return back()->with('status', $inputAmount.'PHP added to your balance.');
        }else{
            return back()->with('errorStatus', 'Inputted value is invalid. Please try again!');
        }
    }

    public function updateLoanRequests(Request $request){
        $loanRequestID = $request->input('changeMe2');
        $loanRequestStatus = $request->input('changeMe1');
        $loanAmount = (double)DB::table('loan_requests')->where('id', $loanRequestID)->value('loan_amount');
        $userBalance = (double)DB::table('users')->where('id', Auth::id())->value('balance');
        $loanerId = (double)DB::table('loan_requests')->where('id', $loanRequestID)->value('loaner_id');

        if($loanRequestStatus == -1){

        }else{
            $dateNow = Date("Y-m-d H:i:s");
            $due = Date("Y-m-d H:i:s", strtotime($dateNow."+1 Month"));
            DB::table('loan_requests')->where('id', $loanRequestID)->update(['status' => 1]);
            DB::table('loan_requests')->where('id', $loanRequestID)->update(['due_date' => $due]);
            DB::table('users')->where('id', Auth::id())->update(['balance' => ($userBalance - $loanAmount)]); // lender
            DB::table('users')->where('id', $loanerId)->update(['balance' => ($userBalance + $loanAmount)]); // loaner
        return back()->with('balanceStatus', ($loanAmount).'PHP was deducted to your balance.');
        }
        //if 0(Decline), delete row in DB
        //if 1(Accept), set Status to 1
    }

    public function payLoan(Request $request){
        $loanID = $request->input('payMe2');
        $Amount = (double)$request->input('payMe');
        $balance = (double)DB::table('users')->where('id', Auth::id())->value('balance');
        $Diff = $balance - $Amount;
        DB::table('users')
                  ->where('id', Auth::id())
                  ->update(['balance' => ($Diff)]);

        $lender_id = DB::table('loan_requests')->where('id', $loanID)->value('lender_id');
        $balance2 = (double)DB::table('users')->where('id', $lender_id)->value('balance');
        $Diff2 = $balance2 + $Amount;
        error_log($Diff2);

        DB::table('users')->where('id', Auth::id()) ->update(['balance' => ($Diff)]); // lender
        DB::table('users')->where('id', $lender_id)->update(['balance' => ($Diff2)]); // loaner
        DB::table('loan_requests')->where('id', $loanID)->update(['amount_paid' => ($Amount)]);

        DB::table('loan_requests')->where('id', $loanID)->update(['status' => 2]);
        return back()->with('balanceStatus', ($Amount).'PHP was deducted to your balance.');
    }
}
