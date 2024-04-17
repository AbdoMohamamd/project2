<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{


    public function index(Request $request)
    {
        if ($request->user('sanctum')->can('view users')) {
            return User::all();
        } else {
            return "only admin and authenticated users can view users";
        }
    }

    public function show($id, Request $request)
    {
        if ($request->user('sanctum')->can('view users')) {
            return User::find($id);
        } else {
            return "only admin and authenticated users can view users by their id";
        }
    }



    public function store(Request $request)
    {
        if ($request->user('sanctum')->can('create users')) {
            $formFields = $request->validate(
                [
                    'name' => ['required'],
                    'email' => ['required', 'email'],
                    'password' => ['required', 'min:6'],

                ]

            );

            return User::create($formFields);
        } else {
            return "Only admin can create users";
        }
    }
    public function update($id, Request $request)
    {
        if ($request->user('sanctum')->can(('update users'))) {
            $user = User::find($id);
            $user->update($request->all());
            return $user;
        } else {
            return "Only admin can update users";
        }
    }
    // public function change(Request $request, User $user)
    // {

    //     $formFields = $request->validate(
    //         [
    //             'name' => ['required'],
    //             'email' => ['required', 'email'],
    //             'password' => ['required', 'min:6']
    //         ]

    //     );

    //     $user->update($formFields);
    //     return redirect('/users/show')->with('message', 'User was updated Successfully');
    // }

    public function destroy(Request $request, $id)
    {
        if ($request->user('sanctum')->can('delete users')) {
            $user = User::findOrFail($id);
            return  $user->delete();
        } else {
            return "Only admin can delete users";
        }
    }


    // public function restore($id, Request $request)
    // {

    //     if ($request->user('sanctum')->can('delete users')) {
    //         $user = User::withTrasffhed()->findOrFail($id);
    //         $user->restore();
    //     } else {
    //         return "Only admin can create users";
    //     }
    // }
    public function search($name, Request $request)
    {
        if ($request->user('sanctum')->can('search users')) {
            return User::where('name', 'Like', '%' . $name . '%')->get();
        } else {
            return "Only admin and authenticated users can search users by their name";
        }
    }
}
