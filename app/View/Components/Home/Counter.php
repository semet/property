<?php

namespace App\View\Components\Home;

use App\Models\Agent;
use App\Models\Location;
use App\Models\Property;
use App\Models\Type;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Counter extends Component
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
        $properties = Property::count();
        $agents = Agent::count();
        $locations = Location::count();
        $types = Type::count();
        return view('components.home.counter')->with([
            'properties' => $properties,
            'agents' => $agents,
            'locations' => $locations,
            'types' => $types,

        ]);
    }
}
