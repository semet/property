<?php

namespace App\View\Components\Partials\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenu extends Component
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
        return view('components.partials.admin.sidebar-menu')->with('menus', $this->menus);
    }

    public function setMenu(): void
    {
        $this->menus = [
            [
                'label' => 'Dashboard',
                'icon' => '',
                'url' => route('admin.dashboard')
            ],
            [
                'label' => 'Tipe Property',
                'icon' => '',
                'url' => route('admin.type.index')
            ],
            [
                'label' => 'Lokasi',
                'icon' => '',
                'url' => route('admin.location.index')
            ],
            [
                'label' => 'Agen',
                'icon' => '',
                'url' => route('admin.agent.index')
            ],
            [
                'label' => 'Property',
                'icon' => '',
                'url' => '#'
            ],
            [
                'label' => 'Partner',
                'icon' => '',
                'url' => '#'
            ],
            [
                'label' => 'Setting',
                'icon' => '',
                'url' => '#'
            ],
        ];
    }
}
