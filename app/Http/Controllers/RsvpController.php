<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Rsvp;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RsvpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $rsvp = new Rsvp();
        // $rsvp->event_id = $request->get('event_id');
        // $rsvp->user_id = $request->get('user_id');

        $rsvp = Rsvp::updateOrCreate(
            ['event_id' => $request->get('event_id'), 
             'user_id' => $request->get('user_id')]
        );
        
        return redirect()->action('UserController@show', $request->get('user_id'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $rsvp = new Rsvp();
        // $rsvp->event_id = $request->get('event_id');
        // $rsvp->user_id = $request->get('user_id');
        // $rsvp->delete();

        $user = Auth::user();
        $event = Event::find($id);

        $user->events()->detach($id);

        return redirect()->action('EventsController@index');
    }
}
