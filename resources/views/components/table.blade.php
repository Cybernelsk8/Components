@props(['show'=>'','data','color'=>'bg-blue-500'])

@php
    if($show==="hidden"){
        $result = count($data);
    }else{
        $result = 5;
    }
    
@endphp

<div x-data="{
        search: '',
        order:true,
        pageSize:{{ $result }},
        curPage:1,
        items: [],
        
        sort(col) {
            this.order = !this.order;
            this.items.sort((a, b) => {
                if(a[col] < b[col]) return this.order ? -1 : 1;
                if(a[col] > b[col]) return this.order ? 1 : -1;
                return 0;
            })
        },
        nextPage() {
            if((this.curPage * this.pageSize) < this.items.length) this.curPage++;
        },
        previousPage() {
            if(this.curPage > 1) this.curPage--;
        },
        get paginate() {
            if(this.items) {
                if(this.search==''){
                    return this.items.filter((row, index) => {
                        let start = (this.curPage-1)*this.pageSize;
                        let end = this.curPage*this.pageSize;
                        if(index >= start && index < end){
                            return true;
                        }             
                    })
                }else{
                    return this.items.filter(item =>Object.keys(item).some(key => `${item[key]}`.toLowerCase().match(this.search.toLowerCase())));
                }
                
            } else return [];
        },
    }"
    x-init="items={{$data}}"
    class="m-10"
 >
    @empty($show)
    <div class="grid sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-center items-center text-gray-400">
            <small>Mostrar</small>
            <select x-model="pageSize" class="border-none text-xs focus:ring-0 focus:border-0">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <small>registros</small>
        </div>
        <div class="flex items-center border-2 rounded-lg overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input x-model="search" placeholder="Buscar ..." type="search" class="text-xs border-none focus:ring-0 focus:border-0 w-full">  
        </div>
    </div>
    @endempty
    

    <div class="flex flex-col mt-2 mb-4 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class=" shadow-md overflow-hidden border-2 border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="{{ $color }}">
                            <tr>
                                {{ $thead }} 
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <template x-if="!paginate">
                                <tr><td colspan="2"><i>Cargando datos...</i></td></tr>
                            </template>
                            <template x-for="(item,index) in paginate" :key="item.id">
                                {{ $tbody }}
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @empty($show)
    <div class="bg-white flex items-center justify-between border-gray-200 ">
        <div class="flex-1 flex justify-between sm:hidden">
            <button @click="previousPage" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </button>
            <button @click="nextPage" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </button>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Filtrados
                    <span x-text="paginate.length" class="font-medium"></span>
                    de
                    <span x-text="items.length" class="font-medium"></span>
                    registros totales
                </p>
            </div>

            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <button @click="previousPage" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <span x-text="curPage" aria-current="page" class="z-10 relative inline-flex items-center px-4 py-2 border text-sm font-medium"></span>
                    <button @click="nextPage" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </nav>
            </div>
        </div>
    </div>
    @endempty
    

</div>

