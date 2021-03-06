<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Band;
use App\Venue;


class EventsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
 
    public function index(Request $request)
    {
        //search bar fxnality
        $searchTerm = $request['search'];
        $searchTown = $request['city'];

        if (isset($request['search']) && !is_null($request['search'])) {
            $events = Event::searchEventsByBandOrDate($searchTerm)->paginate(7);
        } else if (isset($request['city']) && !is_null($request['city'])) {
            $events = Event::searchEventsByVenue($searchTown)->paginate(7);
        } else {
            $events = \App\Event::paginate(7);
        }

        $cities = Venue::cities();

        $data = [
            'events' => $events,
            'cities' => $cities
        ];

        return view ('events.all')->with($data);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        $bands = Band::all();
        $venues = Venue::all();
    // $event->event_time = $request->get('time');
    // $event->price = $request->get('price');
    // $event->buy_tickets = $request->get('tickets');

        $data = compact('bands', 'venues');
        return view('events.create', $data);

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

    //session()->flash('fail', 'Your event was NOT created. Please fix errors.');
    //$this->validate($request, Event::$rules);

        $event = new Event();
        $event->band_id = $request->get('band');
        $event->venue_id = $request->get('venue');
        $event->event_time = $request->input('time');
        $event->price = $request->input('price');
        $event->buy_tickets = $request->input('buy_tickets');
        $event->save();

    // session()->flash('success', 'Your event was created successfully!');
        return redirect()->action('EventsController@index');

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $event = Event::find($id);
        $venue = Event::find($id);

        if (!$event) {
            abort(404);
        }
        
        $data = ['event' => $event];
        $data = ['venue' => $venue];
        $data['events'] = \App\Event::findOrFail($id);

        return view('events.show')->with($data);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {


        if (!Auth::check()) {
            return view('auth.login');
        }
        $bands = Band::all();
        $venues = Venue::all();
        // $event->event_time = $request->get('time');
        // $event->price = $request->get('price');
        // $event->buy_tickets = $request->get('tickets');

        $data = compact('bands', 'venues');

        return view('events.create')->with($data);


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
        $event = new Event();

        $event->band_id = $request->get('band');
        $event->venue_id = $request->get('venue');
        $event->event_time = $request->input('time');
        $event->price = $request->input('price');
        $event->buy_tickets = $request->input('buy_tickets');
        $event->save();

        return redirect()->action('EventsController@show');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404);
        }

        $event->delete();
        $request->session()->flash('success', 'Your event was deleted successfully!');
        
        return redirect()->action('EventsController@index');

    }

}
