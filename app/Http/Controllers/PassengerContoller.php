<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PassengerContoller extends Controller
{

    public function index()
    {
        return Passenger::all();
    }
    public function show($id)
    {
        return Passenger::find($id);
    }
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'dob' => ['required'],
                'password' => ['required'],
                'passport_expiry_date' => ['required'],
                'email' => ['required', 'email'],
                'flight_number' => ['required']
            ]

        );

        return Passenger::create($formFields);
    }
    public function update($id, Request $request)
    {
        $Passenger = Passenger::find($id);
        $Passenger->update($request->all());
        return $Passenger;
    }
    public function destroy($id)
    {
        $Passenger = Passenger::findOrFail($id);
        return  $Passenger->delete();
    }
    public function search($name)
    {
        return Passenger::where('first_name', 'Like', '%' . $name . '%')->get();
    }
    // public function show()
    // {
    //     $passengers = Passenger::select(
    //         'passengers.id',
    //         'passengers.first_name',
    //         'passengers.last_name',
    //         'passengers.email',
    //         'passengers.dob',
    //         'passengers.passport_expiry_date',
    //         'flights.number'
    //     )
    //         ->join('flights', 'passengers.flight_id', '=', 'flights.id')
    //         ->orderBy('passengers.id')
    //         ->paginate(30);


    //     return view('passengers.index', ['passengers' => $passengers]);
    // }




    // public function delete($id)
    // {
    //     $passenger = Passenger::findOrFail($id);
    //     $passenger->delete();
    //     return Redirect::back()->with('message', 'Passenger was deleted');
    // }




    // public function create()
    // {
    //     return view('passengers.create');
    // }




    // public function store(Request $request)
    // {

    //     $formFields = $request->validate(
    //         [
    //             'first_name' => ['required'],
    //             'last_name' => ['required'],
    //             'dob' => ['required'],
    //             'password'=>['required'],
    //             'passport_expiry_date' => ['required'],
    //             'email' => ['required', 'email'],
    //             'flight_number' => ['required']
    //         ]


    //     );
    //     $flight = Flight::where('number', $formFields['flight_number'])->first();
    //     $formFields['flight_id']=$flight->id;
    //     if ($flight) {
    //         Passenger::create($formFields);
    //        return redirect('/passengers/show')->with('message', 'Passenger was created Successfully');
    //     } else {
    //        return Redirect::back()->with('message', 'Please enter a valid flight number');
    //     }
    // }



    // public function update(Passenger $passenger)
    // {

    //     return view('passengers.update', ['passenger' => $passenger]);
    // }



    // public function change(Passenger $passenger, Request $request)
    // {


    //     $formFields = $request->validate(
    //         [
    //             'first_name' => ['required'],
    //             'last_name' => ['required'],
    //             'passport_expiry_date' => ['required', 'date'],
    //             'email' => ['required', 'email'],
    //             'flight_number' => ['required']
    //         ]

    //     );

    //     $flight = Flight::where('number', $formFields['flight_number'])->first();

    //     if ($flight) {
    //         $passenger->update($formFields);
    //         $passenger->flight_id = "$flight->id";
    //         $passenger->save();
    //         return redirect('/passengers/show')->with('message', 'Passenger was updated Successfully');
    //     } else {
    //         return Redirect::back()->with('message', 'Please enter a valid flight number');
    //     }
    // }
}
