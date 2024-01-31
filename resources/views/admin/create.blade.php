@extends('layouts.layoutAdmin')
@section('content')
@push('title')
Dashboard | Create
@endpush
<div class="p-6">

    @if ($errors->any())
    <div class="bg-red-200">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

      {{-- display msg if update successfylly --}}
    @if ($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif

    @includeIf('components.dashboard.form')
  </div>
  @endsection
