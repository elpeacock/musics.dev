<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data['events'] = Event::orderDesc(10);
          $data['upcomingEvents'] = Event::upcomingEvents()->get();
          return view ('events.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session()->flash('fail', 'Your event was NOT created. Please fix errors.');
        $this->validate($request, Event::$rules);

        $event->new Event();
        $event->venue_id = $request->get('venue_id')
        $event->date = $request->get('date');
        $event
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('events.show');
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
}
