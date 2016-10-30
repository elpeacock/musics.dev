<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Band;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        return view ('users.index');
    }
    public function show($id)
    {
        $data['user'] = \App\User::findOrFail($id);
        return view('user.show')->with($data);
    }
    public function edit($id)
    {
        if (!Auth::check() || Auth::user()->id != $id) {
            return redirect()->action('EventsController@index');
        }
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        $data = [
            'user' => $user
        ];
        return view('users.edit', $data);
    }
    public function update(Request $request, $id)
    {   
        dd($user->id);
        if (!Auth::check()) {
            return view('auth.login');
        }
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }

        $user->first_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->image_url = $request->input('image_url');

        $user->save();
        session()->flash('success', 'Your information was updated successfully!');
        return redirect()->action('UserController@show', $user->id);
    }
    public function editPassword($id)
    {
        $user = User::find($id);
        if (!$user) {
            abort(404);
        } elseif ($user->id != \Auth::user()->id) {
            return redirect()->action('EventsController@index');
        }
        $data = [
            'user' => $user
        ];
        return view('users.password', $data);
    }
    public function updatePassword(Request $request, $id) {
        session()->flash('fail', 'Your password was NOT updated. Please fix errors.');
        $this->validate($request, User::$passwordRules);
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        $user->password = Hash::make($request->input('password'));
        $user->save();
        session()->flash('success', 'Your password was updated successfully!');
        return redirect()->action('UserController@show', $user->id);
    }

    public function pickFavoriteBands($id) {

        if(!Auth::check()) {

            return view('auth.login');
        }

        $user = User::find($id);

        $soulBands = Band::where('genre_id', '=', 3)->get();

        $rockPopBands = Band::where('genre_id', '=', 5)->get();

        $altRockBands = Band::where('genre_id', '=', 6)->get();

        $rapHipHop = Band::where('genre_id', '=', 8)->get();

        $countryFolk = Band::where('genre_id', '=', 9)->get();

        $jazzBlues = Band::where('genre_id', '=', 12)->get();

        $hardRockMetal = Band::where('genre_id', '=', 16)->get();

        $danceElectronic = Band::where('genre_id', '=', 18)->get();

        $alternativeIndie = Band::where('genre_id', '=', 73)->get();

        $data = ['user' => $user,
                'soulBands' => $soulBands,
                'rockPopBands' => $rockPopBands,
                'altRockBands' => $altRockBands, 
                'rapHipHop' => $rapHipHop,
                'countryFolk' => $countryFolk,
                'jazzBlues' => $jazzBlues,
                'hardRockMetal' => $hardRockMetal,
                'danceElectronic' => $danceElectronic,
                'alternativeIndie' => $alternativeIndie,
                ];

        return view('user.favorites')->with($data);
    }

    public function storeUserFavorites (Request $request, $id)
    {
        $user = Auth::user();

        $band_ids = $request->input('selectedValues');

        dd($request);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('success', 'Your account was deleted successfully!');
        return redirect()->action('eventsController@index');
    }
    public function search(Request $request)
    {

    }
}
