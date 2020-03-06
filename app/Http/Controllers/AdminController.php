<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Client;
use App\Description;
use App\Transaction;
use App\expense;
use App\expensename;
use App\expensenames;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role');
    }


    public function index()
    {

        $transactions = Transaction::all();

        return view('admin.index', compact('transactions'));
    }

    public function adminpandl(Request $request)
    {
        //
        $expensenames = expensename::all();
        $transactions = Transaction::all();
        $expenses = expense::all();

        $begdate = date('Y-m-d', strtotime($request['begdate']));
        $enddate = date('Y-m-d', strtotime($request['enddate']));

        return view('admin.adminpandl', compact('transactions', 'expenses', 'begdate', 'enddate', 'expensenames'));
    }
}
