<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expense;
use App\expensename;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $expensenames = expensename::all();

        $expenses = expense::all();

        return view('admin.expenses.index', compact('expenses', 'expensenames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $expensenames = expensename::pluck('name', 'id')->all();

        return view('admin.expenses.create', compact('expensenames'));
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
        $input = $request->all();

        expense::create($input);

        $expensenames = expensename::pluck('name', 'id')->all();
        return view('admin.expenses.create', compact('expensenames'));
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
        $expense = expense::findOrFail($id);

        $expensenames = expensename::pluck('name', 'id')->all();


        return view('admin.expenses.edit', compact('expense', 'expensenames'));
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
        $expense = expense::findOrFail($id);

        $input = $request->all();

        $expense->update($input);

        return redirect('expenses');
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
        $expense = expense::findOrFail($id);

        $expense->delete();



        return redirect('expenses');
    }
}
