<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="my-4 text-5xl font-bold leading-tight font-title">Lorem ipsum dolor sit <span class="text-third">amet.</span></h1>
        <p class="leading-normal text-2xl mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquam arcu erat, eu blandit lacus rutrum vitae. Nunc tempor, neque.</p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 font-medium title-font mb-5 text-2xl">Sign Up</h2>
        <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" name="name" id="name" placeholder="Your name" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error ('name') border-red-500 @enderror" value="{{ old('name') }}">
          
          @error('name')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="username" class="sr-only">Username</label>
          <input type="text" name="username" id="username" placeholder="Username" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error ('username') border-red-500 @enderror" value="{{ old('username') }}">
          
          @error('username')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

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
          <label for="password_confirmation" class="sr-only">Password again</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-Enter password" class="w-full bg-white rounded border border-gray-300 focus:border-secondary focus:ring-2 focus:ring-accent text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error ('password_confirmation') border-red-500 @enderror" value="">

          @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div>
          <button type="submit" class="text-white bg-secondary border-0 py-2 px-8 focus:outline-none hover:bg-third rounded text-lg">Register</button>
          <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
        </div>
      </form>

      </div>
    </div>
  </section>