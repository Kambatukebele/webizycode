<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardBlog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $image, public string $date, public string $title, public string $description, public string $link)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-blog');
    }
}
