@extends('layouts.layoutAdmin')
@section('content')
@push('title')
Dashboard
@endpush
<div class="flex gap-y-6 flex-col">




        @includeIf('components.dashboard.table')
        @includeIf('components.dashboard.form')


  </div>
  @endsection
