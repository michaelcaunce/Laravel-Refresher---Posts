
<header class="text-black border-b-2 border-fuchsia-600">
    <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a href="/" class="mr-5 hover:text-secondary text-xl">Home</a>
        <a href="{{ route('posts') }}" class="mr-5 hover:text-secondary text-xl	">Posts</a>
      </nav>
      <a class="flex order-first lg:order-none lg:w-1/5 items-center lg:items-center lg:justify-center mb-4 md:mb-0">
        <img src="/img/logo.png" alt="" class="w-30 h-20 p-2">
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        @auth
          <p class="inline-flex items-center py-1 px-3 mt-4 md:mt-0 text-xl	" href="">{{ auth()->user()->name }}</p>
          <form action="{{ route('logout') }}" method="POST" class="p-3">
            @csrf
            <button type="submit" class="inline-flex items-center text-white bg-secondary border-0 py-1 px-3 focus:outline-none hover:bg-accent rounded text-base mt-4 md:mt-0 inline">Logout
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
          </form>
        @endauth
        @guest 
          <a href="{{ route('login') }}" class="inline-flex items-center text-white bg-secondary border-0 py-1 px-3 focus:outline-none hover:bg-accent rounded text-base mt-4 md:mt-0">Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>

          <a href="{{ route('register') }}" class="inline-flex items-center text-white bg-secondary border-0 py-1 px-3 focus:outline-none hover:bg-third rounded text-base mt-4 md:mt-0 ml-4">Register
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        @endguest
      </div>
    </div>
  </header>