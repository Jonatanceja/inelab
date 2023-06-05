<div class="flex">
    <div class="flex-1 wow fadeInRight" data-wow-delay="0.5s">
        <div class="bg-sky-400 w-8 h-8 flex items-center justify-center text-white rounded">
            @if($icon ?? false)
            {{ $icon }}
            @endif
        </div>
    </div>
    <div class="pl-5 wow fadeInRight" data-wow-delay="0.5s">
        @if($title ?? false)
        <h4 class="text-lg font-bold tracking-wider text-stone-800">{{ $title }}</h4>
        @endif
        <p class="tracking-wide text-stone-500">{{ $slot }}</p>
    </div>
</div>