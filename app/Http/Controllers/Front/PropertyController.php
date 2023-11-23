<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Property $property)
    {
        $data =  $property->load('images');

        return view('pages.property-detail')->with('property', $data);
    }
}
