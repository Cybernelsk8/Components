

<div x-show="open" x-transition.duration.500ms.opacity {{ $attributes->merge(['class'=>'mt-4 py-2 text-white rounded-md shadow-lg bg-gree-500 border-2']) }}>
    <span class="flex px-2 items-center space-x-3">
            {{ $icon }}
        <h1 class="text-lg font-bold">{{ $text }}</h1>
    </span>   
</div>