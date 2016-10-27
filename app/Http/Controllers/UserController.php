<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
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
        $data['users'] = \App\Band::findOrFail($id);
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
        if (!Auth::check()) {
            return view('auth.login');
        }
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        $user->first_name = $request->input('user_name');
        $user->email = $request->input('email');

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

    public function pickFavoriteBands(Request $request, $id) {

        // if(!Auth::check() || Auth::user()->id != $id) {

        //     return view('auth.login');
        // }

        // $user = User::find($id);

        // $data = ['user' => $user];

        return view('user.favorites');
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
