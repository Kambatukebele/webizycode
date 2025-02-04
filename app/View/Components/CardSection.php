<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $icon, public string $link , public string $titleCard, public string $descriptionCard)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-section');
    }
}
