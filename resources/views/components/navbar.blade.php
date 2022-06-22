<nav {{ $attributes->merge(['class'=>'flex items-center justify-between h-14 text-white z-20 shadow-lg bg-lime-500 border-b-2 border-lime-600']) }}>
    <a href=" {{ route('home')}} " class="flex items-center  md:w-64 h-14" alt="Regresar al inicio">
        <img class=" h-24" src="{{asset('img/logo.png')}}" />
        <span class="hidden md:block font-bold ml-2 text-2xl">TITULO</span>
    </a>
    <div class="hidden md:block  w-80">
        <x-input placeholder="Buscar ....">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </x-slot>
        </x-input>
    </div>
    {{-- <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? ' hidden ' : '' }} flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        <span>Regresar</span>
    </a> --}}
    <div>
            {{-- @auth --}}
                <x-user-card class="text-gray-300" name="Nelson Vásquez" />
            {{-- @else
                <div class="flex justify-center items-center">
                    <div class="flex justify-center items-center mr-3">
                        <a href="#">Iniciar sesión</a>
                    </div>
                </div>
            @endauth --}}
    </div>
</nav>