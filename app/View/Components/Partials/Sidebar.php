<?php

namespace App\View\Components\Partials;

use App\Models\Location;
use App\Models\Type;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
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
        $types = Type::orderBy('name')->get();
        $locations = Location::orderBy('name')->get();
        return view('components.partials.sidebar')
            ->with('types', $types)
            ->with('locations', $locations);;
    }
}
