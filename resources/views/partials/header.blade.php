<nav class="bg-black border-gray-200 text-white">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="{{Vite::asset('resources/img/DM-logo.png')}}" class="h-8 rounded-full" alt="Flowbite Logo" />
  </a>

  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

      <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{Vite::asset('resources/img/dmImgg.jpg')}}" alt="user photo">
      </button>

      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-black divide-y divide-gray-100 rounded-lg shadow-sm" id="user-dropdown">
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="{{route('login')}}" class="block px-4 py-2 text-sm text-white">Accedi</a>
          </li>
          <li>
            <a href="{{route('register')}}" class="block px-4 py-2 text-sm text-white">Registrati</a>
          </li>
        </ul>
      </div>

      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>

  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded-sm md:bg-transparent" aria-current="page">Home</a>
      </li>

      <li>
        <a href="#" class="block py-2 px-3 text-white rounded-sm md:bg-transparent" aria-current="page">About me</a>
      </li>

      <li>
        <a href="#" class="block py-2 px-3 text-white rounded-sm md:bg-transparent" aria-current="page">Services</a>
      </li>

      @auth
  @if(auth()->user()->remember_token === auth()->user()->remember_token)
    <li>
      <a href="{{ route('project.create') }}" class="block py-2 px-3 text-white rounded-sm md:bg-transparent" aria-current="page">Create</a>
    </li>
  @endif
@endauth


    </ul>
  </div>
  </div>
</nav>
