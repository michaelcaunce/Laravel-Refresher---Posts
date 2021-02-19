@extends('layouts.app')

@section('content')
  <style>
      .gradient {
       background: linear-gradient(96deg, rgba(244,244,244,1) 68%, rgba(0,200,150,1) 100%);
      }
    </style>
    <section>
      <div class="pt-24 leading-normal tracking-normal h-scren">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <!--Left Col-->
          <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <h1 class="my-4 text-5xl font-bold leading-tight text-gray-600">Lorem ipsum dolor sit amet, consectetur <span class="text-accent">adipiscing elit.</span></h1>
            <p class="leading-normal text-2xl mb-8 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra rutrum urna et bibendum. Vivamus at dui dignissim, dignissim arcu.</p>
            <a class="mx-auto lg:mx-0 inline-flex items-center text-white bg-secondary border-0 py-1 px-3 focus:outline-none hover:bg-accent rounded text-base mt-4 md:mt-0" href="{{ route('posts') }}">Recent Posts</a>
          </div>
          <!--Right Col-->
          <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50 xl:ml-48" src="/img/hero.png" />
          </div>
        </div>
      </div>
    </section>
@endsection