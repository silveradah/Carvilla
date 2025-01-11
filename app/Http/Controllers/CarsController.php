<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreCarsRequest;
use App\Http\Requests\UpdateCarsRequest;
use Illuminate\Contracts\Support\ValidatedData;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the search query
    $search = $request->input('search');

    if(empty($search)){
        $cars = Cars::paginate(5);
        return view("Cars.index", compact('cars'));

    }

    // Query the Cars model
    $cars = Cars::when($search, function ($query, $search) {
        $query->where('name', 'like', '%' . $search . '%')
              ->orWhere('model', 'like', '%' . $search . '%')
              ->orWhere('condition', 'like', '%' . $search . '%')
              ->orWhere('year', 'like', '%' . $search . '%')
              ->orWhere('transmission', 'like', '%' . $search . '%')
              ->orWhere('engine', 'like', '%' . $search . '%');
    })->paginate(5);

    // Return the view with the search results
    return view('cars.index', compact('cars'));
    
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Cars.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarsRequest $request)
    {
        $ValidatedData = $request->validated();
        // dd($ValidatedData);
        if ($request->hasFile('photo')){
            $photo = $request->file('photo')->store('cars', 'public');
            $ValidatedData['photo']=$photo;
        };
        
        Cars::create($ValidatedData);
        return redirect()->route('cars.index')->with('success','YOur requested is being submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $car)
    {
        return view('Cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarsRequest $request, Cars $car)
    {
        $ValidatedData = $request->validated();
        // dd($ValidatedData);
        if ($request->hasFile('photo')){
            $photo = $request->file('photo')->store('cars', 'public');
            $ValidatedData['photo']=$photo;
        };
        
        $car->update($ValidatedData);
        return redirect()->route('cars.index')->with('success','YOur requested is being submitted');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $car)
    {

        if($car->photo){
            $filePath = public_path('storage/' . $car->photo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            } 

        }
        $car->delete();
        return redirect()->back()->with('success','Your requested is being submitted');
    }
}
