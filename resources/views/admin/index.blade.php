@extends('layouts.layoutAdmin')
@section('content')
@push('title')
Dashboard
@endpush
<div class="flex gap-y-6 flex-col">

    <div class=" -mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto mt-2">
        <div class="bg-white inline-block min-w-full  transition-shadow rounded-[18px] shadow-md  backdrop-blur-md  overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-transparent  text-left text-xs font-semibold text-gray-600 dark:text-white  uppercase tracking-wider">
                            Title
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-transparent  text-left text-xs font-semibold text-gray-600 dark:text-white  uppercase tracking-wider">
                            Category
                        </th>


                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-transparent  text-left text-xs font-semibold text-gray-600 dark:text-white  uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody id="container_list">



        @each('components.dashboard.table', $recipes, 'data', 'components.emptydata')

    </tbody>
</table>

</div>
</div>

  </div>
  @endsection
