<x-app-layout>
  <x-slot name="header">
    <h2 class="font-bold text-xl text-blue-400 leading-tight">
      Blog
    </h2>
  </x-slot>

  <x-slot name="navigation">
    menu
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        Do: leer registros del blog
        {{-- <x-jet-welcome /> --}}
      </div>
    </div>
  </div>
</x-app-layout>
