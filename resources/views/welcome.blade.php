<x-AppLayout>
    <div class="p-8">
        <div>
            <h1 class="text-center text-3xl font-bold">COMPLEMENTOS QUE SE PUEDEN USAR</h1>
        </div>

        {{-- NAVBAR --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Navbar</h4>
        <div>
            <x-navbar class="bg-gray-800 border-gray-500 text-gray-300" />
        </div>

         {{-- ASIDEBAR --}}
         <hr class="my-4">
         <h4 class="text-xl text-center py-4">Barra lateral</h4>
         <div>
             <x-aside class="bg-gray-800 border-gray-500" />
         </div>
        
        {{-- DATA TABLE --}}
        <h4 class="text-xl text-center py-4">Data table</h4>
        <div>
            <x-table :data="$data">
                <x-slot name="thead">
                    <x-th sort="id" text="no" />
                    <x-th sort="name" text="nombre" /> 
                    <x-th sort="email" text="correo" />      
                    <th width="10" class="th text-gray-500">
                        Acciones
                    </th>    
                </x-slot>
                <x-slot name="tbody">
                    <tr class="hover:bg-gray-100 text-xs">
                        <td x-text="item.id" class="px-4 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.name" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.email" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td width="10" class="px-4 py-2  whitespace-nowrap  text-gray-500">
                            <div class="flex space-x-2">
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                </button>
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-table>

            <x-table :data="$data" show="hidden" color="bg-gray-800">
                <x-slot name="thead">
                    <x-th sort="id" text="no" />
                    <x-th sort="name" text="nombre" /> 
                    <x-th sort="email" text="correo" />      
                    <th width="10" class="th text-gray-500">
                        Acciones
                    </th>    
                </x-slot>
                <x-slot name="tbody">
                    <tr class="hover:bg-gray-100 text-xs">
                        <td x-text="item.id" class="px-4 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.name" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td x-text="item.email" class="px-2 py-2  whitespace-nowrap  text-gray-500"></td>
                        <td width="10" class="px-4 py-2  whitespace-nowrap  text-gray-500">
                            <div class="flex space-x-2">
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                </button>
                                <button class="transform hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-table>
        </div>

        {{-- USER CARD --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">USER CARDS</h4>
        <div>
            <x-user-card />
        </div>

        {{-- BOTONES --}}
        
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Botones e inputs</h4>
        <div >
            <div class="flex space-x-2 py-4">
                <x-button text="Button" class="bg-red-500 text-red-200 border-red-700 shadow-red-500" />
                <x-button text="Button" class="bg-blue-500 text-blue-200 border-blue-700 shadow-blue-500" />
                <x-button text="Button" class="bg-lime-500 text-lime-200 border-lime-700 shadow-lime-500" />
                <x-button text="Button" class="bg-yellow-500 text-yellow-200 border-yellow-700 shadow-yellow-500" />
            </div>

            <div class="grid grid-cols-2 gap-3 ">
                <div>
                    <label>Etiqueta del campo</label>
                    <x-input type="text" class="border-blue-500" placeholder="Aqui el texto cualquiera"  />
                </div>
                <div>
                    <label>Etiqueta del campo</label>
                    <x-input type="text" class="focus:ring-red-500 focus:border-red-500 border-green-500" placeholder="Aqui el texto cualquiera"  />
                </div>
                <x-input type="text" class="focus:ring-lime-500 focus:border-lime-500 border-red-500" placeholder="Aqui el texto cualquiera"  />
                <x-input-search placeholder="Buscar ...." />
            </div>
        </div>

        {{-- MODAL --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Modal</h4>
        <div x-data="{open:false}">
            <div class="flex justify-center">
                <x-button @click="open=true" text="abrir modal" class="bg-blue-500 text-blue-200 border-blue-700" />
            </div>    
            <x-modal color="lime">
                <x-slot name="title">
                    Este es el encabezado del modal
                </x-slot>
                <x-slot name="content">
                    Aqui puede ir todo el contenido que se requiera
                </x-slot>
                <x-slot name="foot">
                    <div class="flex space-x-2">
                        <x-button @click="open=false" text="cancelar" class="bg-red-500 text-red-200 border-red-700" />
                        <x-button text="aceptar" class="bg-blue-500 text-blue-200 border-blue-700" />
                    </div>
                </x-slot>
            </x-modal>

        </div>
        <br>
        {{-- MODAL ALERTA --}}
        <div x-data="{open:false}">
            <div class="flex justify-center">
                <x-button @click="open=true" text="abrir modal alerta" class="bg-red-500 text-red-200 border-red-700" />
            </div>    
            <x-modal color="red">
                <x-slot name="title">
                    Este es el encabezado del modal
                </x-slot>
                <x-slot name="content">
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                       <p> ¿ Aqui puede ir todo el contenido que se requiera ? </p>
                    </div>
                </x-slot>
                <x-slot name="foot">
                    <div class="flex justify-end space-x-2">
                        <x-button @click="open=false" text="No" class="bg-red-500 text-red-200 border-red-700" />
                        <x-button text="Si" class="bg-green-500 text-green-200 border-green-700" />
                    </div>
                </x-slot>
            </x-modal>

        </div>

        {{-- SPIN --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">Spin y barra de progreso</h4>
        <div class="flex justify-center mb-4">
            <x-spin class="border-t-red-500"/>
            <x-spin class=" border-x-lime-500"/>
            <x-spin class="border-t-green-500 border-x-green-500"/>
            <x-spin class="border-t-orange-500 border-4 h-14 w-14" />
        </div>

        {{-- BARRA DE PROGRESO --}}
        <x-progress-bar class="bg-blue-500" ancho="h-1" />
        <x-progress-bar class="bg-lime-500" ancho="h-2" />
        <x-progress-bar class="bg-red-500"  ancho="h-4"/>

        
        {{-- ALERTAS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">ALERTAS</h4>
        <div>
            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-lime-500 w-96 border-lime-800 shadow-lime-500">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>
            </x-alert>

            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-blue-500 border-blue-800 shadow-blue-500" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                </x-slot>
            </x-alert>

            <x-alert text="Aqui va el mensaje que yo quiera" class="bg-red-500 shadow-red-500 border-red-800" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                </x-slot>
            </x-alert>
        </div>

        
        {{-- TOOLTIPS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">TOOLTIPS</h4>
        <div class="flex justify-center">
            <x-tooltip  class="mt-6 w-64">
            
                <x-slot name="msgtooltip">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo debitis sint optio suscipit, eaque provident totam, sed doloribus nisi voluptatibus odit esse itaque magni! Amet, in! Unde quae provident quas!</p>
                </x-slot>
                <x-slot name="icon">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg> --}}
                </x-slot>
                <p>Aqui esta el tooltip coloca tu cursor encima</p>
            </x-tooltip>

            {{-- TOOLTIP CON COLORES --}}
            <x-tooltip  class="mt-6 w-64 bg-lime-300 border-lime-500">
                <x-slot name="msgtooltip">
                    <p>¡¡ texto corto para probar el tooltip y lo vean !!</p>
                </x-slot>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                      </svg>
                </x-slot>
                <p>Ejemplo con colores en el tooltip</p>
            </x-tooltip>

        </div>

        {{-- CARDS --}}
        <hr class="my-4">
        <h4 class="text-xl text-center py-4">CARDS</h4>
        <div class="grid sm:grid-cols-4 gap-4">
            <x-card>
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="red">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="blue">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
            <x-card color="indigo">
                <x-slot name="title">
                    Titulo del card
                </x-slot>
                <x-slot name="content">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolorem deleniti aliquid, error laborum neque quod odit recusandae doloremque. Ducimus id iste deserunt autem ut? Tempore laudantium molestias minima sit!
                    </p>
                </x-slot>
                <x-slot name="foot">
                    Aqui puede ir un pie de pagina si se decea
                </x-slot>
            </x-card>
        </div>  
    </div>



    {{-- para que se apliquen los colores del modal y cards --}}

    <div class="border-lime-600">
        <div class="bg-lime-400">
            <div class="bg-lime-100"></div>
        </div>
    </div>

    <div class="border-red-600">
        <div class="bg-red-400">
            <div class="bg-red-100"></div>
        </div>
    </div>

    <div class="border-blue-600">
        <div class="bg-blue-400">
            <div class="bg-blue-100"></div>
        </div>
    </div>

    <div class="border-indigo-600">
        <div class="bg-indigo-400">
            <div class="bg-indigo-100"></div>
        </div>
    </div>

</x-AppLayout>