<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
          $data['events'] = \App\Event::paginate(15);
          return view ('events.all')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          if (!Auth::check()) {
        		return view('auth.login');
    		}
        $bands = Band::all();
        $venue = Venue::all();

        $data = compact('bands', 'venue');
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
          session()->flash('fail', 'Your event was NOT created. Please fix errors.');
          $this->validate($request, Event::$rules);
          $event = new Event();
          $event->band_id = $request->get('band');
          $event->venue_id = $request->get('venue');
          $event->event_time = $request->get('time');
          $event->price = $request->get('price');
          $event->buy_tickets = $request->get('tickets');



          $event->save();
          session()->flash('success', 'Your event was created successfully!');
          return redirect()->action('EventsController@show', $event->id);

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
          $data = [
            'event' => $event
          ];
          $data = [
            'venue' => $venue
          ];

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
          $event = Event::find($id);
          if (!$event) {
            abort(404);
          }
          $data = [
            'event' => $event
          ];
          $data = [
            'venue' => $venue
          ];
          return view('events.edit', $data);
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

    public function rsvp(Request $request)
    {
        $vote = Vote::firstOrCreate(
                array(
                        'user_id' => $request->user()->id,
                        'post_id' => $request->get('postId'),
                    )
            );
        if ($request->get('voteValue') == 1){
            $vote->vote = 1;
        } else if ($request->get('voteValue') == 0){
            $vote->vote = 0;
        }
        
        $vote->save();
        return redirect()->action('PostsController@index');
    }

}
