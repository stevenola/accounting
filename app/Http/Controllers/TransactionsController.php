<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateTransactionRequest;
use App\Client;
use App\Description;
use App\Transaction;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            //


            $transactions = Transaction::orderBy('created_at', 'Desc')->paginate(12);



            return view('admin.transactions.index', compact('transactions'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = Client::pluck('name', 'id')->all();



        $descriptions = Description::pluck('name', 'id')->all();

        return view('admin.transactions.create', compact('clients', 'descriptions'));
    }

    public function createdeposit()
    {
        //
        $clients = Client::pluck('name', 'id')->all();

        $descriptions = Description::pluck('name', 'id')->all();



        return view('admin.transactions.createdeposit', compact('clients', 'descriptions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTransactionRequest $request)
    {
        //


        $input = $request->all();

        if ($input['type'] == 0) {
            $input['amount1'] = $input['amount1'] * -1;
        }

        Transaction::create($input);

        // users is name.  NOT url
        if ($input['type'] == 1) {
            return redirect('transactions');
        } else {
            $clients = Client::pluck('name', 'id')->all();

            $descriptions = Description::pluck('name', 'id')->all();
            return view('admin.transactions.createdeposit', compact('clients', 'descriptions'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaction = Transaction::findOrFail($id);

        $clients = Client::pluck('name', 'id')->all();

        $descriptions = Description::pluck('name', 'id')->all();



        return view('admin.transactions.show', compact('transaction', 'clients', 'descriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaction = Transaction::findOrFail($id);

        $clients = Client::pluck('name', 'id')->all();

        $descriptions = Description::pluck('name', 'id')->all();


        return view('admin.transactions.edit', compact('transaction', 'clients', 'descriptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $transaction = Transaction::findOrFail($id);

        $input = $request->all();

        $transaction->update($input);

        return redirect('transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        $clients = Client::pluck('name', 'id')->all();

        return redirect('transactions');
    }

    public function showclienttrans($id)
    {
        //
        {
            //
            // $clients = Client::all();
            $clients = Client::pluck('name', 'id')->all();

            $transactions = Transaction::all();

            $transactions = $transactions->sortByDesc('created_at');



            return view('admin.clients.showclienttrans', compact('transactions', 'clients'));
        }
    }


    public function printrecur(Request $request)
    {
        //
        {
            //
            $clients = Client::all();

            $transactions = Transaction::all();


            $date = date('Y-m-d', strtotime($request['date']));

            return view('admin.transactions.printrecur', compact('transactions', 'clients', 'date'));
        }
    }
}
