<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $name;
    public $type;
    public $label;
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $label, $id = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
