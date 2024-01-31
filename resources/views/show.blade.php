@extends('layouts.layout')
@section('content')
@push('title')
{{$recipe->title}}
@endpush

{{ $recipe}}<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">

            <h1 class="text-2xl font-bold mb-4 ">
                {{$recipe->title}}
            </h1>
            <span>{{$recipe->category['name']}}</span>

            <img class="max-w-sm mx-auto my-4 rounded-lg shadow" src="https://images.unsplash.com/photo-1616031037011-087000171abe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8Q2hvY29sYXRlJTIwQ2FrZXxlbnwwfDB8fHwxNjk0MTc2ODk0fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Chocolate Cake" class="mb-4 rounded-lg shadow-md">

            <h2 class="text-xl font-semibold mb-2">Ingredients</h2>
            <ul class="list-disc list-inside mb-4">
                <li class="mb-2">2 cups all-purpose flour</li>
                <li class="mb-2">1 3/4 cups granulated sugar</li>
                <li class="mb-2">3/4 cup unsweetened cocoa powder</li>
                <li class="mb-2">1 1/2 tsp baking powder</li>
                <li class="mb-2">1 1/2 tsp baking soda</li>
                <!-- Add more ingredients here -->
            </ul>

            <h2 class="text-xl font-semibold mb-2">Instructions</h2>
            <ol class="list-decimal list-inside mb-6">
                <li class="mb-2">Preheat your oven to 350°F (175°C). Grease and flour two 9-inch round cake pans.</li>
                <li class="mb-2">In a large bowl, sift together the flour, cocoa powder, baking powder, and baking soda.
                </li>
                <li class="mb-2">In another bowl, whisk together the sugar and eggs until well combined.</li>
                <li class="mb-2">Add the wet ingredients to the dry ingredients and mix until smooth.</li>
                <li class="mb-2">Divide the batter evenly between the prepared pans.</li>
                <!-- Add more instructions here -->
            </ol>

            <p class="text-gray-700 mb-4">Serve the cake with your favorite frosting or enjoy it plain!</p>

            <div class="text-center">
                <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Print Recipe</button>
            </div>
        </div>
    </div>
</body>


  @endsection
