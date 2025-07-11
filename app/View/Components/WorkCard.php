<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $image, $alt, $title, $description, $tech, $detailsUrl, $externalUrl;

    public function __construct($image, $alt, $title, $description, $tech, $detailsUrl = '#', $externalUrl = '#')
    {
        //
        $this->image = $image;
        $this->alt = $alt;
        $this->title = $title;
        $this->description = $description;
        $this->tech = $tech;
        $this->detailsUrl = $detailsUrl;
        $this->externalUrl = $externalUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-works.work-card');
    }
}
