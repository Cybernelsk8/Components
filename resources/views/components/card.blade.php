@props(['color'=>'lime'])

<div class="relative flex justify-center mt-6">
    <div  {{ $attributes->merge(['class' => 'border-'.$color.'-600 bg-white  rounded-lg shadow-lg border-2 overflow-hidden']) }} >
        @isset($title)
        <header class="bg-{{ $color }}-400 border-b-2 p-2">
            <h1 class="text-3xl font-bold text-white">
                {{ $title }}
            </h1>
        </header> 
        @endisset
        
        <section class="py-4 px-4">
            {{ $content }}
        </section>
        @isset($foot)
        <footer class= "bg-{{ $color }}-100 border-t-2 text-right p-4">
            {{ $foot }}
        </footer>
        @endisset
        

    </div>
</div>