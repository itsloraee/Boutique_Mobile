<?php

namespace App\View\Components;

use App\Models\category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Récupérer toutes les catégories à l'aide du modèle catégorie
        $categories = category::limit(5)->get();
        return view('components.categories' , compact('categories'));
    }



}
