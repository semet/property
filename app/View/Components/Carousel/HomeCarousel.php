<?php

namespace App\View\Components\Carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeCarousel extends Component
{
    public array $slides;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->setSlides();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel.home-carousel')->with('slides', $this->slides);
    }

    public function setSlides()
    {
        $this->slides = [
            [
                'path' => 'assets/images/carousel/slide-1.jpg',
                'alt' => 'Slide 1'
            ],
            [
                'path' => 'assets/images/carousel/slide-2.jpg',
                'alt' => 'Slide 2'
            ],
            [
                'path' => 'assets/images/carousel/slide-3.jpg',
                'alt' => 'Slide 3'
            ],
        ];
    }
}
