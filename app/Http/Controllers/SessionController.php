<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $session = Session::all()->where('user_id',1)->where('completed', 0);
        // return $session;
        return auth()->user()->session->where('completed',0);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user_id = 1;
        Session::create([
            'user_id' => 1,
            'bugbet' => $request->bugdet,
            'startDate' => Carbon::now(),
            'endDate' => Carbon::now()->addDays(30)
            ]
        );
        return response('Created Successfully', 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function completed()
    {
        $session = Session::all()->where('user_id',1)->where('completed', 1);

        return $session;
    }


 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        $session->delete();

        return response('Deleted', 203);
    }
}
