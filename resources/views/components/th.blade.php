
<th @click="sort('{{ $sort }}')"  scope="col" class="th text-gray-200">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
          </svg>
        {{ $text }}
    </div>
</th>