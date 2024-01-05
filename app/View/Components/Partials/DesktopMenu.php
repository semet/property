<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesktopMenu extends Component
{
    public array $menus;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->setMenu();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.desktop-menu')->with('menus', $this->menus);
    }

    public function setMenu()
    {
        $this->menus = [
            [
                'label' => 'Home',
                'url' => route('homepage')
            ],
            [
                'label' => 'Tentang Kami',
                'url' => route('about')
            ],
            [
                'label' => 'Rumah',
                'url' => route('listing-by-type', 'rumah')
            ],
            [
                'label' => 'Apartemen',
                'url' => route('listing-by-type', 'apartemen')
            ],
            [
                'label' => 'Tanah',
                'url' => route('listing-by-type', 'tanah')
            ],
            [
                'label' => 'Gudang',
                'url' => route('listing-by-type', 'gudang')
            ],
            [
                'label' => 'Ruko',
                'url' => route('listing-by-type', 'ruko')
            ],
            [
                'label' => 'Hubungi Kami',
                'url' => '#'
            ],
        ];
    }
}
