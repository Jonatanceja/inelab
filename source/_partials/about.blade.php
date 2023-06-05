<x-section>
    <div class="space-y-5 col-span-1 md:col-span-3">
        <x-subtitle>Acerca de nosotros</x-subtitle>
        <x-title>Tu guía en purificación y filtración de agua</x-title>
        <x-text>
            Nuestro compromiso es asesorar a nuestros clientes en las industrias de Alimentos y Bebidas,
            Farmacéutica, Cosmética, Química, Universidades y Centros de investigacion en la selección de
            instrumentos, equipos de agua ultrapura, filtración para laboratorio y procesos de manufactura así
            como también en el área Hospitalaria.<br><br>
            Nos esforzamos por ayudarles a encontrar las soluciones más adecuadas que cumplan con sus 
            necesidades específicas. Nuestro objetivo es convertirnos en sus mejores asesores en los 
            campos a los que brindamos servicio, ofreciendoles confianza y excelencia en cada paso del camino.
        </x-text>
        <x-button>
            <a href="/nosotros">Conoce más</a>
        </x-button>
    </div>
    <div class="col-span1 md:col-span-2">
        <img class="rounded-md w-full wow fadeIn" src="/assets/images/about.jpg" alt="Acerca de" data-wow-delay="0.5s">
    </div>
</x-section>
<div class="container mx-auto max-w-6xl space-y-10 md:mb-20 mb-10 px-5">
    <div class="flex items-center text-stone-800">
        <div class="flex-none pr-5 wow fadeInRight uppercase tracking-wide" data-wow-delay="0.5s"><p>Nuestros clientes</p></div>
        <div class="h-px bg-stone-800 flex-1 wow fadeInRight" data-wow-delay="0.5s"></div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-6 gap-10 md:gap-20 items-center">
        @php
            $delay = 0.1; // Retraso inicial
        @endphp

        @foreach ($page->logos as $logo)
            <img class="wow fadeInUp max-h-20 mx-auto" src="{{ $logo->image }}" alt="{{ $logo->title }}" data-wow-delay="{{ $delay }}s">
            @php
                $delay += 0.1; // Aumenta el retraso por cada iteración
            @endphp
        @endforeach
    </div>
</div>