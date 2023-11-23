<?php

namespace App\View\Components\Home;

use Arr;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Partners extends Component
{
    public array $partners;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->setPartners();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.partners')->with('partners', $this->partners);
    }

    public function setPartners()
    {
        $this->partners = [
            [
                'name' => 'anz'
            ],
            [
                'name' => 'bag'
            ],
            [
                'name' => 'bca'
            ],
            [
                'name' => 'bjb'
            ],
            [
                'name' => 'bni'
            ],
            [
                'name' => 'bri'
            ],
            [
                'name' => 'bsc'
            ],
            [
                'name' => 'btn'
            ],
            [
                'name' => 'ccb'
            ],
            [
                'name' => 'cimb'
            ],
            [
                'name' => 'commonw'
            ],
            [
                'name' => 'ctbc'
            ],
            [
                'name' => 'dbs'
            ],
            [
                'name' => 'hsbc'
            ],
            [
                'name' => 'kebhana'
            ],
            [
                'name' => 'mandiri'
            ],
            [
                'name' => 'maybank'
            ],
            [
                'name' => 'mega'
            ],
            [
                'name' => 'mnc'
            ],
            [
                'name' => 'muamalat'
            ],
            [
                'name' => 'ocbc'
            ],
            [
                'name' => 'panin'
            ],
            [
                'name' => 'permata'
            ],
            [
                'name' => 'uob'
            ]
        ];
    }
}
