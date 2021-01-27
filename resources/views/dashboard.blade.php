@extends('layouts.app')

@section('content')
  <section class="py-12 px-4">
  <h2 class="text-4xl text-center mb-10 font-semibold font-heading">Latest posts</h2>
  <div class="flex flex-wrap -mx-4">
    <div class="bh-white w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
      <div class="h-full pb-8 rounded shadow">
        <a href="#">
        
          <div class="px-6">
            <small>22 Oct 2020 | By Michael Scott</small>
            <h3 class="text-2xl my-3 font-heading">Being world’s best boss</h3>
            <p class="text-gray-400">The wise man once said: "Friend first, boss second, entertainer third". That man was me.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
      <div class="h-full pb-8 rounded shadow">
        <a href="#">
          
          <div class="px-6">
            <small>22 Oct 2020 | By Dwight K. Schrute</small>
            <h3 class="text-2xl my-3 font-heading">Understanding the paper</h3>
            <p class="text-gray-400">So you think you know everything about paper? False, you know nothing. Let me illuminate your first steps into my world.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
      <div class="h-full pb-8 rounded shadow">
        <a href="#">
         
          <div class="px-6">
            <small>22 Oct 2020 | By Jim Halpert</small>
            <h3 class="text-2xl my-3 font-heading">Dwight doesn’t understand the paper</h3>
            <p class="text-gray-400">Read it and finally find out that Dwight Schrute is merely a scammer.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection