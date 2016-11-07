<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\Band;
use App\Venue;
use App\Genre;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $searchTerm = $request['search'];

        if (isset($request['search']) && !is_null($request['search'])) {
            $bands = \App\Band::searchBand($searchTerm)->paginate(15);
        } else {
            $bands = \App\Band::paginate(15);
        }

        $data = ['bands' => $bands];

        return view('bands.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $data = compact('genres');

        return view('bands.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $band = new Band();

        $band->name = $request->input('bandName');
        $band->genre_id = $request->input('genre');
        $band->owner_id = $request->input('ownerID');
        $band->description = $request->input('description');
        $band->save();

        return redirect()->action('BandsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['bands'] = \App\Band::findOrFail($id);
        
        return view('bands.show') ->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bands.edit');
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
    public function destroy($id)
    {
        //
    }
}
