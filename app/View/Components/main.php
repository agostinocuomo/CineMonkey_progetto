<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Categorie;

class main extends Component
{
    public $category=[];
    
    /**
     * Create a new component instance.
     */
    public function __construct(Categorie $category)
    {
       $this->category=$category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->category=Categorie::all()->push();
        return view('components.main',  ['category'=>$this->category]);
    }
}
