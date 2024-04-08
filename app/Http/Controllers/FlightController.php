<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
{
    public function show()
    {

        $flights = Flight::paginate(25);
        return view('flights.index', ['flights' => $flights]);
    }
    public function delete(Flight $flight)
    {
        $flight->delete();
        return Redirect::back()->with('message', 'Flight was deleted');
    }
    public function create()
    {
        return view('flights.create');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'number' => ['required'],
            'departure_city' => ['required'],
            'arrival_city' => ['required'],
            'departure_time' => ['required'],
            'arrival_time' => ['required'],

        ]);
        Flight::create($formFields);
        return redirect('/flights/show')->with('message', 'Flight was successfully created');
    }

    public function update(Flight $flight)
    {
        return view('flights.update', ['flight' => $flight]);
    }
    public function change( Request $request)
    {
        $formFields = $request->validate([
            'number' => ['required'],
            'departure_city' => ['required'],
            'arrival_city' => ['required'],
            'departure_time' => ['required'],
            'arrival_time' => ['required'],

        ]);

        Flight::create($formFields);
        return redirect('/flights/show')->with('message', 'Flight updated Successfully');
    }
}
