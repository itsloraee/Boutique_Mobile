<?php

namespace App\View\Components;

use App\Models\product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardProduct extends Component
{

    public $product; // information sur le produit 
    /**
     * Create a new component instance.
     */
    public function __construct(Product $product)
    {
        //
        
        $this->product=$product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
