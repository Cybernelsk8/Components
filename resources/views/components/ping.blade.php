
<span {{ $attributes->merge(['class'=>'flex h-'.$size.' w-'.$size]) }} >
    <span class="animate-ping relative inline-flex h-full w-full rounded-full bg-{{ $color }}-400 opacity-75"></span>
    <span class="absolute inline-flex rounded-full h-{{ $size }} w-{{ $size }} bg-{{ $color }}-500"></span>
</span>