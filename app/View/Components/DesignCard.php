<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesignCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $image, $alt, $title, $description, $detailsUrl;

    public function __construct($image, $alt, $title, $description, $detailsUrl ='#')
    {
        //
        $this->image = $image;
        $this->alt = $alt;
        $this->title = $title;
        $this->description = $description;
        $this->detailsUrl = $detailsUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-works.design-card');
    }
}
