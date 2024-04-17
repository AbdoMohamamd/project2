<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
{

    public function index(Request $request)
    {

        if ($request->user('sanctum')->can('view flights')) {
            return Flight::all();
        } else {
            return "Only admin and authenticated users can view fligts";
        }
    }
    public function show(Request $request, $id)
    {
        if ($request->user('sanctum')->can('view flights')) {
            return Flight::find($id);
        } else {
            return "Only admin and authenticated users can view fligts";
        }
    }
    public function store(Request $request)
    {
        if ($request->user('sanctum')->can('create flights')) {
            $formFields = $request->validate(
                [
                    'number' => ['required'],
                    'departure_city' => ['required'],
                    'arrival_city' => ['required'],
                    'departure_time' => ['required'],
                    'arrival_time' => ['required'],
                ]

            );

            return Flight::create($formFields);
        } else {
            return "only admin can create flights";
        }
    }
    public function update($id, Request $request)
    {
        if ($request->user('sanctum')->can('update flights')) {
            $Flight = Flight::find($id);
            $Flight->update($request->all());
            return $Flight;
        } else {
            return 'Only admin can update flights';
        }
    }
    public function destroy($id, Request $request)
    {
        if ($request->user('sanctum')->can('delete flights')) {
            $Flight = Flight::findOrFail($id);
            return  $Flight->delete();
        } else {
            return 'only admin can delete flights';
        }
    }
    public function search(Request $request)
    {

        if ($request->user('sanctum')->can('search flights')) {
            return Flight::where('arrival_city', 'like', '%' . $request->arrival_city . '%')
                ->where('departure_city', 'like', '%' . $request->departure_city . '%')
                ->get();
        } else {
            return "Only admin and authenticated users can search flights";
        }
    }
    // public function show()
    // {

    //     $flights = Flight::paginate(25);
    //     return view('flights.index', ['flights' => $flights]);
    // }
    // public function delete(Flight $flight)
    // {
    //     $flight->delete();
    //     return Redirect::back()->with('message', 'Flight was deleted');
    // }
    // public function create()
    // {
    //     return view('flights.create');
    // }
    // public function store(Request $request)
    // {
    //     $formFields = $request->validate([
    //         'number' => ['required'],
    //         'departure_city' => ['required'],
    //         'arrival_city' => ['required'],
    //         'departure_time' => ['required'],
    //         'arrival_time' => ['required'],

    //     ]);
    //     Flight::create($formFields);
    //     return redirect('/flights/show')->with('message', 'Flight was successfully created');
    // }

    // public function update(Flight $flight)
    // {
    //     return view('flights.update', ['flight' => $flight]);
    // }
    // public function change( Request $request)
    // {
    //     $formFields = $request->validate([
    //         'number' => ['required'],
    //         'departure_city' => ['required'],
    //         'arrival_city' => ['required'],
    //         'departure_time' => ['required'],
    //         'arrival_time' => ['required'],

    //     ]);

    //     Flight::create($formFields);
    //     return redirect('/flights/show')->with('message', 'Flight updated Successfully');
    // }
}
