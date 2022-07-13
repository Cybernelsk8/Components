<div>
    <x-table header :data="$data">
        <x-slot name="thead">
            <th wire:click="sort('id')" class="th">id</th>
            <th wire:click="sort('name')" class="th">nombre</th>
            <th wire:click="sort('email')" class="th">email</th>
            <th wire:click="sort('dt')" class="th">fecha creacion</th>
            <th width="10" class="th">acciones</th>
        </x-slot>

        <x-slot name="tbody">
            @forelse ($data as $item)
                <tr>
                    <td class="td">{{ $item->id }}</td>
                    <td class="td">{{ strtoupper($item->name) }}</td>
                    <td class="td">{{ $item->email }}</td>
                    <td class="td">{{ \Carbon\Carbon::parse($item->dt)->diffForHumans() }}</td>
                    <td width="10" class="td">
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
            @empty
                <tr>
                    <td colspan="5" class="td text-center">No hay datos ....</td>
                </tr>
            @endforelse
        </x-slot>
    </x-table>
</div>
