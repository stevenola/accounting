<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Cashflow;
use Illuminate\Http\Request;

class CashflowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cashflows = Cashflow::all();

        // $cashflows = $cashflows->sortBy('created_at');

        $cashflows = Cashflow::orderBy('created_at', 'Desc')->paginate(12);

        return view('admin.cashflow.index', compact('cashflows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cashflow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'amount' => 'required',
            'created_at' => 'required'
        ]);

        $input = $request->all();
        // 
        Cashflow::create($input);

        return redirect('cashflows');
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
        $cashflows = Cashflow::findOrFail($id);



        return view('admin.cashflow.edit', compact('cashflows'));
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
        $cashflows = Cashflow::findOrFail($id);

        $input = $request->all();

        $cashflows->update($input);

        return redirect('cashflows');
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
        $cashflows = Cashflow::findOrFail($id);

        $cashflows->delete();



        return redirect('cashflows');
    }
}
