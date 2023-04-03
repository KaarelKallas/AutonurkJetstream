<?php

namespace App\Http\Controllers;

use App\Models\Car;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return Inertia::render(
            'UsedCars',
            [
                'allCars' => $cars,
                'cars' => Car::query()
                ->when(Request::input(['selectMake']), function ($query, $search) {
                    $query->where('make', 'like', '%' . $search . '%')->where('model', Request::input(['selectModel']))
                        ->OrWhere('body', 'like', '%' . $search . '%')
                        ->OrWhere('year', 'like', '%' . $search . '%')
                        ->OrWhere('fuel', 'like', '%' . $search . '%')
                        ->OrWhere('gearbox', 'like', '%' . $search . '%')
                        ->OrWhere('drive', 'like', '%' . $search . '%');
                })->get()

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'make' => 'required|string|max:255',
        //     'model' => 'required'
        // ]);

        $car = Car::create([
            'make' => Request::input('make'),
            'model' => Request::input('model'),
            'body' => Request::input('body'),
            'engine' => Request::input('engine'),
            'engine_size' => Request::input('engine_size'),
            'power' => Request::input('power'),
            'fuel' => Request::input('fuel'),
            'drive' => Request::input('drive'),
            'gearbox' => Request::input('gearbox'),
            'year' => Request::input('year'),
            'mileage' => Request::input('mileage'),
            'color' => Request::input('color'),
            'plate' => Request::input('plate'),
            'VIN' => Request::input('VIN'),
            'price' => Request::input('price'),
            'used' => Request::input('used'),
        ]);


        // if ($images = $request->file('images')) {
        //     foreach ($images as $image) {
        //         $car->addMedia($image)->toMediaCollection('images');
        //     }
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
