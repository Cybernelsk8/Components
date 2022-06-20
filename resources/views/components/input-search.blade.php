@props(['placeholder'=>'Buscar ...'])
<div class="flex items-center border-2 px-2 py-1 w-full rounded-lg h-10 bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    <input type="search" class="border-none focus:ring-0 focus:border-none w-full h-9 text-gray-800" placeholder="{{ $placeholder }}">
</div>