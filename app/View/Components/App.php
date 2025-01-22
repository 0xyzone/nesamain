<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class App extends Component
{
    public $titleName;

    public function __construct($titleName = null)
    {
        \Log::info('Title Name:', ['titleName' => $titleName]);
        $this->titleName = $titleName;
    }


    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app', [
            'titleName' => $this->titleName,
        ]);
    }
}
