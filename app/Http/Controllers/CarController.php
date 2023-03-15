<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
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
                'cars' => $cars,

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
        $this->validate($request, [
            'make' => 'required|string|max:255',
            'model' => 'required'
        ]);

        $car = Car::create([
            'make' => $request->make,
            'model' => $request->model,
            'body' => $request->body,
            'engine' => $request->engine,
            'engine_size' => $request->engine_size,
            'power' => $request->power,
            'fuel' => $request->fuel,
            'drive' => $request->drive,
            'year' => $request->year,
            'mileage' => $request->mileage,
            'color' => $request->color,
            'plate' => $request->plate,
            'VIN' => $request->VIN,
            'price' => $request->price,
            'used' => $request->used,
        ]);


        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $car->addMedia($image)->toMediaCollection('images');
            }
        }
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
