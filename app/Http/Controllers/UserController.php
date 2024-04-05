<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
public function show(){
    $users = User::all();
    return view('users.show', ['users' => $users]);
}

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::back()->with('message', 'User was deleted');


        // Optionally, return a response or redirect to another page
    }

    // Restore a Soft-Deleted User
    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

        // Optionally, return a response or redirect to another page
    }
}
