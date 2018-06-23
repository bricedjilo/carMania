<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show(Car $car) {
        return view('cars.show', compact('car'));
    }

    public function create() {
        return view('cars.create');
    }

    public function update(Car $car) {
        $input = [];

        $this->validateInput();

        if(request()->file('image')) {
            $image = request()->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
        }

        $car->make_id = request('make_id');
        $car->model_id = request('model_id');
        $car->category_id = request('category_id');
        $car->year = request('year');
        $car->description = request('description');
        $car->image = (isset($input['imagename'])) ? $input['imagename'] : $car->image;
        $car->save();
        return redirect("/cars/$car->id/edit");
    }

    public function edit(Car $car) {
        return view('cars.edit', compact('car'));
    }

    public function store() {
        $this->validateInput();
        $this->validate(request(), [
            'image' => 'required|mimes:jpeg,png|max:2048'
        ]);

        $image = request()->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath, $input['imagename']);

        Car::create([
            'make_id'  => request('make_id'),
            'model_id'  => request('model_id'),
            'year'      => request('year'),
            'description' => request('description'),
            'image'     => $input['imagename'],
            'category_id' => request('category_id')
        ]);
        return redirect('/cars');
    }

    public function destroy(Car $car) {
        Car::destroy($car->id);
        unlink("/images/$car->image");
        return redirect('/');
    }

    private function validateInput() {
        $this->validate(request(), [
            'make_id' => 'required|numeric',
            'model_id' => 'required|numeric',
            'year' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|numeric'
        ]);
    }
}
