@props(['type'=>'text','name'=>'','placeholder'=>'','color'=>'border-gray-500'])

<div {{ $attributes->merge(['class'=>'flex items-center border-2 px-2 py-1 w-full rounded-lg h-10 bg-white '.($errors->has($name) ? ' border-red-500': $color)]) }}>
    @isset($icon)
    {{ $icon }}    
    @endisset
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ old($name) }}" class="border-none focus:ring-0 focus:border-none w-full h-9 text-gray-700">
</div>