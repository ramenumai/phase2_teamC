<x-app-layout>
  <x-slot name="header">
    <h2 class=" text-xl text-gray-800 leading-tight text-center font-bold">
      {{ __('Crate or Join') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('group.index') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Create
              </button>
            </div>
          </form>

          <form class="mb-6" action="{{ route('dashboard') }}" method="POST">
            <div class="flex flex-col mb-4">
              <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              JOIN
              </button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>