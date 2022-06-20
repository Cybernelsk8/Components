
<div class="flex justify-center items-center pr-4">
    <div x-data="{ open: false }" class="flex justify-center items-center">
        <div @click="open = !open" class="relative border-b-4 border-transparent py-3 w-52 transform hover:scale-110" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
            <div class="flex justify-end items-center space-x-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300">
                    <img src="https://ui-avatars.com/api/?name=Nelson Vasquez&color=7F9CF5&background=EBF4FF" alt="" class="w-full h-full object-cover">
                </div>
                <div class="font-bold text-gray-900 text-sm">
                    <div {{ $attributes->merge(['class'=>'cursor-pointer']) }}>Nelson Vásquez</div>
                </div>
            </div>

            <div @click.away="open = false" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-52 px-5 py-3 bg-white rounded-lg shadow-lg border-2 mt-5">
                <ul class="space-y-3 text-gray-600 ">
                    <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-blue-700">
                            <div class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            {{__('Profile')}}
                        </a>
                    </li>
                    @isset($lista)
                    {{ $lista }}
                    @endisset
                    <hr class="">
                    <li class="font-medium">
                        <form action="#" method="POST" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600" >
                            @csrf
                            <div class="mr-3 text-red-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            </div>
                            <button type="submit">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>