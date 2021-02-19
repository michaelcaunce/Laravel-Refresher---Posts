@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-3">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $user->name }}</h1>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="flex-1 p-4">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-yellow-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">{{ $posts->count() }}</h2>
          <p class="leading-relaxed">{{ Str::plural('Post', $posts->count()) }}</p>
        </div>
      </div>
      <div class="flex-1 p-4">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-yellow-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">{{ $user->receivedLikes->count() }}</h2>
          <p class="leading-relaxed">{{ Str::plural('Like', $user->receivedLikes->count()) }}</p>
        </div>
      </div>
    </div>

    {{-- Start of recent posts --}}
    <div class="bg-white p-6 rounded-lg">
        @if ($posts->count())
            @foreach ($posts as $post)
              {{-- reference blade component --}}
              <x-post :post="$post"/>
            @endforeach
            {{-- pagination --}}
            {{ $posts->links() }}
            @else
              <p>{{ $user->name }} has not created any posts yet.</p>
        @endif 
      </div>
  </div>
</section>

@endsection