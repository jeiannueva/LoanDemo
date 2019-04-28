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

       return view('dashboard', ['userBalance' => $userBalance]);
    }

    public function process_add_balance(Request $request){
        $userBalance = (double)DB::table('users')->where('id', Auth::id())->value('balance');
        $inputAmount = (double)$request->input('amount');

      DB::table('users')
                ->where('id', Auth::id())
                ->update(['balance' => ($userBalance + $inputAmount)]);
        return back()->with('status', $inputAmount.'PHP added to your balance.');
    }
}
