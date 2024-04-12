<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }
    public function showList()
    {

        return view('users.show');
    }

    // public function create()
    // {
    //     return view('users.create');
    // }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6']
            ]

        );

        return User::create($formFields);
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }
    public function change(Request $request, User $user)
    {

        $formFields = $request->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6']
            ]

        );

        $user->update($formFields);
        return redirect('/users/show')->with('message', 'User was updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return  $user->delete();
    }


    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();
    }
    public function search($name)
    {
       return User::where('name', 'Like', '%' . $name . '%')->get();
    }
}
