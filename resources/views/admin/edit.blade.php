@extends('layouts.layoutAdmin')
@section('content')
@push('title')
Dashboard | Edit
@endpush



<div class="p-6">

    @if ($errors->any())
    <div class="bg-red-200">
        <ul>
            @foreach ($errors->all() as $error)

                <li class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium">Danger alert!</span> {{ $error }}
                  </li>
            @endforeach
        </ul>
    </div>
    @endif

      {{-- display msg if update successfylly --}}
      @if ($message = Session::get('success'))

      <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <span class="font-medium">Success alert!</span> {{$message}}
        </div>
      @endif

    @includeIf('components.dashboard.formEdit')
  </div>>
  </div>
  @endsection
