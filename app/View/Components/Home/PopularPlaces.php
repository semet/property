<?php

namespace App\View\Components\Home;

use App\Models\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularPlaces extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $locations = Location::withCount('properties')->orderBy('properties_count', 'DESC')->limit(8)->get();
        return view('components.home.popular-places')->with('locations', $locations);
    }
}
