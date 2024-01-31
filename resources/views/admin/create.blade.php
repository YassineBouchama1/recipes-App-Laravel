@extends('layouts.layoutAdmin')
@section('content')
@push('title')
Dashboard | Create
@endpush
<div class="p-6">

    @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)

                <li class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium">Danger alert!</span> {{ $error }}
                  </li>
            @endforeach
        </ul>

    @endif

      {{-- display msg if update successfylly --}}
    @if ($message = Session::get('success'))

    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Success alert!</span> {{$message}}
      </div>
    @endif

    @includeIf('components.dashboard.form')
  </div>
  @endsection
