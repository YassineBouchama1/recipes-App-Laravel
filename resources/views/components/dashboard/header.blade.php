<header class="z-[995] bg-white dark:bg-[#111c2d] dark:text-white transition-shadow px-5  min-h-[70px] rounded-[18px] duration-300 ease-in-out flex  w-full box-border  items-center justify-center sticky top-0 right-0 color-opacity-87   shadow-md backdrop-blur-md">






<ul class="flex  gap-x-5">

    <div class="group ">

        <a href="/">
       Home </a>

        <div class=" group-hover:flex hidden popover absolute bg-gray-700 border shadow-md mt-2 px-2   py-1 rounded-lg">

          <p class="text-white ">Home</p>
        </div>
      </div>
    <div class="group ">

        <a href="/admin">
       Dashboard </a>

        <div class=" group-hover:flex hidden popover absolute bg-gray-700 border shadow-md mt-2 px-2   py-1 rounded-lg">

          <p class="text-white ">Home</p>
        </div>
      </div>

      <div class="group ">

        <a href="../create">
       Create</a>

        <div class=" group-hover:flex hidden popover absolute bg-gray-700 border shadow-md mt-2 px-2   py-1 rounded-lg">

          <p class="text-white ">Create</p>
        </div>
      </div>

      <div   class="group ">
        {{-- <form action="{{ route('logout') }}" method="POST"> --}}
          <form action="{{ route('logout') }}" method="POST">
            @csrf()
            <button>Logout</button>
       </form>

        <div class=" group-hover:flex hidden popover absolute bg-gray-700 border shadow-md mt-2 px-2   py-1 rounded-lg">

          <p class="text-white ">Create</p>
        </div>
      </div>
</ul>





  </header>


  <script src="layout\header\header.js"></script>
