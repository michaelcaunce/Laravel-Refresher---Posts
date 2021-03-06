@props(['post' => $post])

<div class="flex justify-between  mx-auto">
  <div class="w-full lg:w-8/12">
    <div class="mt-12">
      <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center">
					<a href="{{ route('users.posts', $post->user) }}" class="flex items-center">
            <h1 class="text-gray-700 font-bold text-2xl hover:text-secondary">{{ $post->user->name }}</h1>
          </a>
					<span class="font-light text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
        </div>
				<span class="mt-5 text-secondary">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        <div class="mt-2">
          <p class="mt-2 text-gray-600">{{ $post->body }}</p>
        </div>
				@can('delete', $post)
					<form action="{{ route('posts.destroy', $post) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="text-red-500 font-bold mt-5">Delete</button>
					</form>
    		@endcan
				<div class="flex items-center mt-10">
          @auth
              @if (!$post->likedBy(auth()->user()))
                  <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                      @csrf
                      <button type="submit" class="text-blue-500">Like</button>
                  </form>
              @else
                  <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-blue-500">Unlike</button>
                  </form>
              @endif
          @endauth
        </div>
      </div>
    </div>
  </div>
</div>