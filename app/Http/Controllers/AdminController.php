<?php

namespace App\Http\Controllers;

use App\Cashflow;
use Carbon\Carbon;
use App\Client;
use App\Description;
use App\Transaction;
use App\expense;
use App\expensename;
use App\expensenames;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role');
    }


    public function index(Request $request)
    {

        $transactions = DB::table('transactions')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('sum(amount1)* -1 as total'))->where('type', 0)->groupBy(DB::raw('YEAR(created_at)'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();
        // return $transactions;

        $cashflows = Cashflow::all();
        $thisyear = $request['thisyear'];

        return view('admin.index', compact('transactions', 'cashflows', 'thisyear'));
    }

    public function adminpandl(Request $request)
    {
        //
        $expensenames = expensename::all();
        $transactions = Transaction::all();
        $expenses = expense::all();
        $cashflows = Cashflow::all();
        $clients = Client::all();

        $begdate = date('Y-m-d', strtotime($request['begdate']));
        $enddate = date('Y-m-d', strtotime($request['enddate']));

        return view('admin.adminpandl', compact('transactions', 'expenses', 'cashflows', 'begdate', 'enddate', 'expensenames', 'clients'));
    }
}
