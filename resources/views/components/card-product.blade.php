<!-- Ma carte de Produit-->

<div class="bg-white-500 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">

<div class="bg-gray-300 h-64 flex items-center justify-center">
    <img src="{{$product->image}}" alt="">

</div>  

<div class="p-4">

    <span class="text-xs text-orange-600 font-semibold">
    
    {{$product->category_id}}
    
    </span>

    <h3 class="text-lg font-bold mt-2 mb-2 text-gray-800">
       {{$product->name}}
    </h3>

    <p class="text-gray-600 text-sm mb-4">
        {{$product->description}}
    </p>

    <div class="flex items-center justify-between">
        <span class="text-2xl font-bold text-blue-600">
            {{$product->price}} €
        </span>
        <a  href="{{route('boutiques.show' , $product->id)}}"class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
           Voir
        </a>
    </div>

</div>

</div>


