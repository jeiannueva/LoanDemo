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
            ->join('loan_requests', 'loan_requests.loaner_id', '=', 'users.id')->where('status', 0)->where('lender_id', Auth::id())->get();

        $loanReminders = DB::table('users')
            ->join('loan_requests', 'loan_requests.lender_id', '=', 'users.id')->where('status', 1)->get();

       $getUserName = DB::table('users')->where('id', Auth::id())->value('name');

       //error_log($loanRequests);

       return view('dashboard', compact('userBalance','loanRequests', 'loanReminders'));
    }

    public function process_add_balance(Request $request){
        $userBalance = (double)DB::table('users')->where('id', Auth::id())->value('balance');
        $inputAmount = (double)$request->input('amount');

      DB::table('users')
                ->where('id', Auth::id())
                ->update(['balance' => ($userBalance + $inputAmount)]);
        return back()->with('status', $inputAmount.'PHP added to your balance.');
    }

    public function updateLoanRequests(Request $request){
        $decision = $request->input('changeMe1');
        error_log($decision); //print to console

        //if 0(Decline), delete row in DB
        //if 1(Accept), set Status to 1

    }
}
