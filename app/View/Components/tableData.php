<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tableData extends Component
{
    /**
     * Create a new component instance.
     */
    public $usuarios;
    public $headers;
    public function __construct(array $usuarios, array $headers)
    {
        $this->usuarios = $usuarios;
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-data');
    }
}
