<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::orderBy('name')
            ->withCount('properties')
            ->paginate(10);

        return view('pages.admin.location.index')->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationRequest $request)
    {
        if($request->hasFile('photo')) {
            $fileName = Str::of(now()->toDateString())->replace('-', '_').'_'.
                $request->name.'.'.
                $request->file('photo')
                    ->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/location', $fileName);
        }

        Location::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'address' => $request->address,
            'image' => $fileName
        ]);

        return redirect()->route('admin.location.index')
            ->with('success', 'Data lokai berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('pages.admin.location.edit')->with('location', $location);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationRequest $request, Location $location)
    {
        $fileName = '';
        if($request->hasFile('photo')) {
            $fileName = Str::of(now()->toDateString())->replace('-', '_').'_'.
                $request->name.'.'.
                $request->file('photo')
                    ->getClientOriginalExtension();
            //Delete old image
            Storage::delete('public/location/'.$location->image);

            $request->file('photo')->storeAs('public/location', $fileName);
        }

        $fileName = $location->image;

        $location->update([
           'slug' => Str::slug($request->name),
           'name' => $request->name,
           'address' => $request->address,
           'image' => $fileName
        ]);

        return redirect()->route('admin.location.index')
            ->with('success', 'Data lokai berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
