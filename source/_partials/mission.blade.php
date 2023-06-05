<div class="bg-sky-50">
    <x-section2>
        <div class="space-y-3">
            <h4 class="text-sm text-stone-800 tracking-widest uppercase font-semibold wow fadeInRight">Nuestra misión</h4>
            <h3 class="font-bold text-xl text-stone-800 wow fadeInRight tracking-wide" data-wow-delay="0.25s">Brindar asesoramiento experto a nuestros clientes</h3>
            <x-text>
                así como accesorios de filtración para laboratorios químicos. Buscamos brindar soluciones. 
                Buscamos brindar soluciones personalizadas que cumplan las necesidades de nuestros clientes 
                y destacar como líderes en los campos en los que ofrecemos nuestros servicios.
            </x-text>
        </div>
        <div class="space-y-3">
            <h4 class="text-sm text-stone-800 tracking-widest uppercase font-semibold wow fadeInRight">Nuestra visión</h4>
            <h3 class="font-bold text-xl text-stone-800 wow fadeInRight tracking-wide" data-wow-delay="0.25s">Ser referentes en soluciones de purificación de agua</h3>
            <x-text>
                Buscamos crear un impacto positivo en la industria promoviendo un acceso fácil y seguro. Nos
                esforzamos por ser reconocidos como lideres en el mercado, impulsados por la excelencia la
                sostenibilidad el compromiso con la satisfacción total de nuestros clientes.
            </x-text>
        </div>
    </x-section2>
    <div class="container mx-auto max-w-6xl space-y-10 md:pb-20 pb-10 px-5">
        <div class="flex items-center text-stone-800">
            <div class="flex-none pr-5 wow fadeInRight uppercase tracking-wide" data-wow-delay="0.5s"><p>Nuestros clientes</p></div>
            <div class="h-px bg-stone-800 flex-1 wow fadeInRight" data-wow-delay="0.5s"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-6 gap-10 md:gap-20 items-center">
            @php
                $delay = 0.1; // Retraso inicial
            @endphp
    
            @foreach ($page->logos as $logo)
                <img class="wow fadeInUp max-h-20 mx-auto mix-blend-multiply" src="{{ $logo->image }}" alt="{{ $logo->title }}" data-wow-delay="{{ $delay }}s">
                @php
                    $delay += 0.1; // Aumenta el retraso por cada iteración
                @endphp
            @endforeach
        </div>
    </div>
</div>
