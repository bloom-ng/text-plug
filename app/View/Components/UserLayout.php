<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserLayout extends Component
{
    public $page;
    public $name;
    public $activePage;

    /**
     * Create a new component instance.
     */
    public function __construct($page, $activePage)
    {
        $this->page = $page;
        $this->activePage = $activePage;
        $this->name = auth()->user()->name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-layout', ['name' => $this->name]);
    }
}
