@props(['color'=>'lime','size' => 'sm'])

<div x-show="open" x-transition.duration.500ms.opacity  class="inset-0 fixed h-screen bg-gray-900 bg-opacity-40 z-20 overflow-y-auto">
    <div class="relative flex justify-center mt-6">
        <div {{ $attributes->merge(['class' => 'border-'.$color.'-600 bg-white mx-4  max-w-'.$size.' min-w-min rounded-lg shadow-lg border-2 overflow-hidden']) }} >
            <header class="bg-{{ $color }}-400 border-b-2 p-2 flex justify-between items-start">
                <h1 class="text-3xl font-bold text-white">
                    {{ $title }}
                </h1>
                <button @click="open=false" class="p-2 font-bold text-gray-500 transform hover:scale-125">X</button>
            </header>
            <section class="py-4 px-4">
                {{ $content }}
            </section>
            <footer class= "bg-{{ $color }}-100 border-t-2 text-right p-4">
                {{ $foot }}
            </footer>

        </div>
    </div>
</div>