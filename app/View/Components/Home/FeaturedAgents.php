<?php

namespace App\View\Components\Home;

use App\Models\Agent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedAgents extends Component
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
        $agents = Agent::limit(10)->withCount('properties')->get();
        return view('components.home.featured-agents')->with('agents', $agents);
    }
}
