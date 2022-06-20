<div class="flex space-x-2 has-tooltip cursor-pointer justify-center">
    <span {{ $attributes->merge(['class'=>'tooltip font-bold text-center bg-white mx-auto rounded-md border-2 p-2 shadow-lg']) }} >{{ $msgtooltip }}</span>
    {{ $icon }}
    {{ $slot }}
</div>