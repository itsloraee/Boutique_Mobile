@extends('layouts.app')
@section('content')
    
    <!-- Grille de Produit Mobile, 1 produit par rangée, tablette 2 produits par rangée, tablette 2 produits par rangée, ordinateur 4 par rangée --> 
   
    <div class=" grid grid -cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        @forelse ($products as $product)
        
        <x-card-product :product="$product" />
        
        @empty
            Il n'y a aucun produits en base
        
            @endforelse
        
        
        
   </div>
    
   
    
    Produits
@endsection