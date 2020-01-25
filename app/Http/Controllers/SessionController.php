<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Session::all()->where('user_id',1)->where('completed', 0);
        // return auth()->user()->$session;
        return $session;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
