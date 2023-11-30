<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $demo;
    public $label;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$name,$label,$demo=0)
    {
        $this->type = $type;
        $this->name = $name;
        $this->demo = $demo;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
