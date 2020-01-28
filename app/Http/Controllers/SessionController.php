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
        
       $session = auth()->user()->session->where('completed',0);
       $count= $session->count();

       if($count == 0){
           return [];
       }else {
            $currentDate = Carbon::now();
            $endDate = $session[0]->endDate;
        
            if($currentDate < $endDate){
                return $session;
            }else{
                auth()->user()->session()->update([
                    'completed'=>1
                ]);
                return [];
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       $session = Session::create([
            'user_id' => auth()->user()->id,
            'budget' => $request->budget,
            'startDate' => Carbon::now(),
            'endDate' => Carbon::now()->addDays(30)
            ]
        );
        return response($session, 201);
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
