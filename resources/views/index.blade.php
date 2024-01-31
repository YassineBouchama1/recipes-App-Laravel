@extends('layouts.layout')
@section('content')
@push('title')
from index
@endpush


<div class="p-6">

@includeIf('shared.searchBar')
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
{{$recipes}}
        @each('components.cardRecipe', $recipes, 'data', 'components.emptydata')


    </div>
  </div>
  @endsection
