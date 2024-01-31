@extends('layouts.layout')
@section('content')
@push('title')
{{$recipe->title}}
@endpush

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">

            <h1 class="text-2xl font-bold mb-4 ">
                {{$recipe->title}}
            </h1>
            <span class="text-blue-500 font-bold">{{$recipe->category['name']}}</span>

            <img class="max-w-sm mx-auto my-4 rounded-lg shadow" src="{{ asset('images').'/'.$recipe->image }}" alt="Chocolate Cake" class="mb-4 rounded-lg shadow-md">

            <h2 class="text-xl font-semibold mb-2">Ingredients</h2>
            <ul class="list-disc list-inside mb-4">

                {{$recipe->content}}
                {{-- <li class="mb-2">1 1/2 tsp baking soda</li> --}}
                <!-- Add more ingredients here -->
            </ul>

            <p class="text-gray-700 mb-4">Serve the cake with your favorite frosting or enjoy it plain!</p>


        </div>
    </div>
</body>


  @endsection
