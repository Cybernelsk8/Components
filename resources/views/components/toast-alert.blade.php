<div x-data="{open:true}" x-init="()=>setTimeout(()=>open=false,6000)" x-show="open" x-transition.duration.500ms.opacity {{ $attributes->merge(['class'=>'fixed mt-4 py-2 text-white rounded-md shadow-lg bg-gree-500 border-2 top-0 right-0 transform bg-opacity-60']) }}>
    <span class="flex px-2 items-center space-x-3">
            @isset($icon)
                {{ $icon }} 
            @endisset
        <h1 class="text-lg font-bold">{{ $text }}</h1>
    </span>   
</div>

