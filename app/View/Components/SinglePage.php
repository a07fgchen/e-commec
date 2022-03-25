<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SinglePage extends Component
{
    public $type;

    // protected $except = ['type'];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
       $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.single-page');
    }
}