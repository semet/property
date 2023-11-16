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
                'url' => '#'
            ],
            [
                'label' => 'Tentang Kami',
                'url' => '#'
            ],
            [
                'label' => 'Rumah',
                'url' => '#'
            ],
            [
                'label' => 'Apartemen',
                'url' => '#'
            ],
            [
                'label' => 'Tanah',
                'url' => '#'
            ],
            [
                'label' => 'Gudang',
                'url' => '#'
            ],
            [
                'label' => 'Ruko',
                'url' => '#'
            ],
            [
                'label' => 'Hubungi Kami',
                'url' => '#'
            ],
        ];
    }
}
