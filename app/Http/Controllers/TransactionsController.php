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

            $transactions = Transaction::all();

            $transactions = $transactions->sortByDesc('created_at');

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



    // RECURRING FUNCTION ******************************************

    public function createrecur()
    {
        //

        $transactions = Transaction::all();

        $clients = Client::pluck('name', 'id')->all();

        $descriptions = Description::pluck('name', 'id')->all();

        return view('admin.transactions.createrecur', compact('transactions', 'clients', 'descriptions'));
    }

    public function storerecur(CreateTransactionRequest $request)
    {


        // this worked with storerecur() empty parenthesis
        // $transactions = array(
        //     array(
        //         "id" => "5",
        //         "type" => "1",
        //         "description1" => "1",
        //         "amount1" => "333",
        //     ),

        //     array(
        //         "id" => "9",
        //         "type" => "1",
        //         "description1" => "1",
        //         "amount1" => "222",
        //     )

        // );
        $transactions = Transaction::all();

        $transaction["id"] = $request->id;
        $transaction["type"] = $request->type;
        $transaction["description1"] = $request->description1;
        $transaction["amount1"] = $request->retainer;


        foreach ($transactions as $transaction) {
            $values = new Transaction();
            $values->client_id = $transaction["id"];
            $values->type = $transaction["type"];
            $values->description1 = $transaction['description1'];
            $values->amount1 = $transaction['amount1'];
            $values->save();
        }

        // users is name.  NOT url
        return redirect('transactions');
    }


    // RECURRING FUNCTION END ******************************************



    public function createdeposit()
    {
        //
        $clients = Client::pluck('name', 'id')->all();

        $descriptions = Description::pluck('name', 'id')->all();



        return view('admin.transactions.createdeposit', compact('clients'));
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
        return redirect('transactions');
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



        return redirect('transactions');
    }
}
