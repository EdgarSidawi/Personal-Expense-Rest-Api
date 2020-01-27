<?php

namespace App\Http\Controllers;

use App\Model\Expense;
use App\Model\Session;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('JWT', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Session $session)
    {
        return $session->expense;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Session $session, Request $request)
    {
       $expense = $session->expense()->create($request->all());
        return response($expense, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Session $session, Request $request, Expense $expense)
    {
        $expense->update($request->all());
        return response($expense, 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session, Expense $expense)
    {
       $expense->delete();

       return response('Deleted', 203);
    }
}
