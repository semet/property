<?php

namespace App\View\Components\Shared;

use App\Models\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LocationCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Location $location
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.location-card');
    }
}
