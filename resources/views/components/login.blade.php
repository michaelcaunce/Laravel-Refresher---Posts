<section class="text-gray-600">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="my-4 text-5xl font-bold leading-tight font-title">Lorem ipsum dolor sit amet, consectetur <span class="text-secondary">adipiscing.</span></h1>
      <p class="leading-normal text-2xl mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu tempor augue. Sed maximus.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
       <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-2xl">Login</h2>
      @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
          {{ session('status') }}     
        </div>
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="text" name="email" id="email" placeholder="Email" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error ('email') border-red-500 @enderror" value="{{ old('email') }}">

          @error('email')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Choose a password" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error ('password') border-red-500 @enderror" value="">

          @error('password')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember">Remember me</label>
          </div>
        </div>

        <div>
          <button type="submit" class="text-white bg-secondary border-0 py-2 px-8 focus:outline-none hover:bg-accent rounded text-lg">Login</button>
        </div>
      </form>
      <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
    </div>
  </div>
</section>