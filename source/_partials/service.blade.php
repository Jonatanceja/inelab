<div class="h-12"></div>
<x-section>
    @foreach ($services as $service)
    <div class="space-y-5 col-span-1 md:col-span-3">
        <x-subtitle>{{ $service->title }}</x-subtitle>
        <x-title>{{ $service->subtitle }}</x-title>
        <x-text>
            {!! $service->getContent() !!}
        </x-text>
    </div>
    <div class="col-span1 md:col-span-2">
        <img class="rounded-md w-full wow fadeIn" src="{{ $service->image }}" alt="{{ $service->title }}" data-wow-delay="0.5s">
    </div>
    @endforeach
</x-section>