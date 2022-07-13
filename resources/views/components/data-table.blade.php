@props(['show'=>'','data','color'=>'bg-blue-500'])

@php
    if($show==="hidden"){
        $result = count($data);
    }else{
        $result = 10;
    }
    
@endphp

<div x-data="{
        order:true,
        search:'',
        items: [],
        
        sort(col) {
            this.order = !this.order;
            this.items.sort((a, b) => {
                if(a[col] < b[col]) return this.order ? -1 : 1;
                if(a[col] > b[col]) return this.order ? 1 : -1;
                return 0;
            })
        },

        get searching() {
            if(this.items) {
                this.pagination.filter_rows = this.items.length;
                if(this.search.length == 0){
                    return this.items.filter((item, index) => {
                        let start = (this.pagination.curPage-1)*this.pagination.pageSize;
                        let end = this.pagination.curPage*this.pagination.pageSize;
                        if(index >= start && index < end){
                            return true;
                        }
                    });
                }else{
                    let keys = ['name','email'];
                    const newSearch = this.items.filter(item => item.name.toLowerCase().match(this.search.toLowerCase()) || item.email.toLowerCase().match(this.search.toLowerCase()));
                    this.pagination.filter_rows = newSearch.length;
                    return newSearch.filter((item,index)=>{
                        let start = (this.pagination.curPage-1)*this.pagination.pageSize;
                        let end = this.pagination.curPage*this.pagination.pageSize;
                        if(index >= start && index < end){
                            return true;
                        }
                    });
                }
                
            }else{
                return [];
            }    
        },
        pagination:{
            pageSize:{{ $result }},
            curPage:1,
            filter_rows:'',

            nextPage() {
                if((this.curPage * this.pageSize) < this.filter_rows) this.curPage++;
            },
            previousPage() {
                if(this.curPage > 1) this.curPage--;
            },
            totalPages(){ 
                return Math.ceil(this.filter_rows / this.pageSize);    
            },
            resetPage(){
                this.curPage = 1;
            },
            paginationNav(){
               return (this.totalPages() > 10 ) ? true : false;
            },
        }
    }"
    x-init="items={{$data}}"
    class="m-10"
 >
    @empty($show)
    <div class="grid sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-center items-center text-gray-400">
            <small>Mostrar</small>
            <select x-model="pagination.pageSize" x-on:change="pagination.resetPage" class="border-none text-xs focus:ring-0 focus:border-0">
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
            <input x-model.debounce.1000ms="search" placeholder="Buscar ..." type="search" class="text-xs border-none focus:ring-0 focus:border-0 w-full">  
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
                            <template x-if="!searching">
                                <tr><td colspan="2"><i>Cargando datos...</i></td></tr>
                            </template>
                            
                            <template x-for="(item,index) in searching" :key="item.id">
                                {{ $tbody }}
                            </template>

                            <template x-if="searching=='' ">
                                <tr><td colspan="2" align="center" ><i>No hay datos de coincidan ....</i></td></tr>
                            </template>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @empty($show)
    <div  class="bg-white flex items-center justify-between border-gray-200 ">
        <div class="flex-1 flex justify-between sm:hidden">
            <button @click="pagination.previousPage" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </button>
            <button @click="pagination.nextPage" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </button>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Mostrando <span x-text="((pagination.curPage-1)*pagination.pageSize) + 1"></span> a <span x-text="((pagination.curPage*pagination.pageSize) > pagination.filter_rows) ? pagination.filter_rows : (pagination.curPage*pagination.pageSize) "></span> de <span x-text="pagination.filter_rows" class="font-medium"></span> filtrados
                    {{-- Total: <span x-text="searching.length" ></span> registros --}}
                </p>
            </div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <button @click="pagination.previousPage()" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 ">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                
                <div x-show="pagination.paginationNav()" class="flex">
                    <button x-text="1" @click="pagination.curPage = 1" aria-current="page" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"></button>
                    
                    <template x-for="i in 9">
                        <button x-text="(i+1)" @click="pagination.curPage = (i+1)" aria-current="page" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"></button>
                    </template>
                    <button aria-current="page" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium">...</button>
                    <button x-text="pagination.totalPages()" @click="pagination.curPage = pagination.totalPages()" aria-current="page" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"></button>
                </div>

                <div x-show="!pagination.paginationNav()">
                    <template  x-for="i in pagination.totalPages()">
                        <button x-text="i" @click="pagination.curPage = i" aria-current="page" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"></button>
                    </template>
                </div>

                


                <button @click="pagination.nextPage()" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </nav>
        </div>
    </div>
    @endempty
    

</div>

