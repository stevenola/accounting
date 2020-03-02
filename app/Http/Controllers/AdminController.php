<?php

namespace App\Http\Controllers;


use App\Client;
use App\Description;
use App\Transaction;

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
}
