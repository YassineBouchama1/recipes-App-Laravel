<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>@stack('title')</title>
</head>
<body class=" flex  flex-row w-[100%] p-5 m-0 text-[#111C2D] bg-[#f0f5f9] dark:bg-slate-800 text-base font-normal leading-5 font-sans">

  <!-- start sidebar -->



  <!-- start sidebar -->
    <div class="w-full ml-auto block   px-5 rounded-lg lg:px-[16px]   box-border ">


    <!-- Header Start -->


    @includeIf('components.dashboard.header')

    <!-- END Header Start -->
    <div class="rounded-[18px] h-full mt-6 ">
        @yield('content')

    </div>
</body>
</html>
