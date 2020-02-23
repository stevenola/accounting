<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\User;
use App\Client;
use App\Transaction;
use App\Description;
use DB;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transactions = Transaction::all();

        $clients = Client::all();

        $clients = $clients->sortBy('name');

        return view('admin.clients.index', compact('clients', 'transactions'));

        // return view('admin.clients.index', [
        //     'clients' => $clients,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

        $users = User::pluck('name', 'id')->all();


        return view('admin.clients.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
        //
        $input = $request->all();

        Client::create($input);

        // users is name.  NOT url
        return redirect('clients');
    }

    // RECURRING FUNCTION ******************************************

    public function createrecur()
    {
        //
        $clients = Client::all();
        $transactions = Transaction::all();
        $descriptions = Description::pluck('name', 'id')->all();

        return view('admin.clients.createrecur', compact('clients', 'transactions', 'descriptions'));
    }

    public function storerecur(Request $request)
    {
        $transactions = Transaction::all();
        $clients = Client::all();

        foreach ($request->id as $index => $id) {
            $transactions = new Transaction();
            $transactions->created_at = $request->date;
            $transactions->client_id = $request->id[$index];
            $transactions->amount1 = $request->retainer[$index];
            $transactions->save();
        }


        // users is name.  NOT url
        return redirect('transactions');
    }


    // RECURRING FUNCTION END ******************************************




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.clients.show');
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
        $client = Client::findOrFail($id);

        $users = User::pluck('name', 'id')->all();


        return view('admin.clients.edit', compact('client', 'users'));
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
        $client = Client::findOrFail($id);

        $input = $request->all();

        $client->update($input);

        return redirect('clients');
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
        $client = Client::findOrFail($id);

        $client->delete();



        return redirect('clients');
    }
    public function transsum()

    {
        $clients = Client::all();

        $clients = $clients->sortBy('name');

        $transactions = Transaction::all();

        return view('admin.clients.transsum', compact('clients', 'transactions'));
    }
}
