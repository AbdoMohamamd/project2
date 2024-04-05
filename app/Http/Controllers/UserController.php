<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();

        return view('users.show', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6']
            ]

        );
        $formFields['password'] = bcrypt($formFields['password']);
        User::create($formFields);
        return redirect('/')->with('message', "User Successfully Created");
    }
    public function update(User $user)
    {

        return view('users.update', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::back()->with('message', 'User was deleted');
    }

 
    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

       
    }
    
}
