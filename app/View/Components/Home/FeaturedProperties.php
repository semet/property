<?php

namespace App\View\Components\Home;

use App\Models\Property;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedProperties extends Component
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
        $properties = Property::orderBy('price', 'asc')->limit(6)->get();
        return view('components.home.featured-properties')->with('properties', $properties);
    }
}
