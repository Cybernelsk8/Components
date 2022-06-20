@props(['ancho'=>'h-4'])
<div x-data="{
    progress: 0,
    get timer(){
        return setInterval(()=>{
            if(this.progress < 100){
                this.progress++;
            }else{
                this.progress = 0;
            }   
        },100)
    }
 }"
 x-init="timer"
 class="flex items-center mx-2">
    <div class="w-full bg-gray-200 {{ $ancho }} mb-6 rounded-full border overflow-hidden">
        <div {{ $attributes->merge(['class'=>'bg-lime-500 '.$ancho.' text-center text-sm text-white font-bold leading-none']) }} x-bind:style="{width:progress+'%'}">@if($ancho == 'h-4')<span x-text="progress+' %'"></span>@endif</div>
    </div>
</div>