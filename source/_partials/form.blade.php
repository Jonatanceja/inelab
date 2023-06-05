<section class="py-10 md:py-20 container max-w-6xl px-5 md:px-0 mx-auto flex justify-center">
    <div class="w-full md:w-3/4">
        <form class="space-y-5 w-full" action="form.php" method="POST">
            <div class="md:flex md:space-x-10 space-y-5 md:space-y-0 wow fadeInRight">
                <div class="block w-full md:w-1/2">
                    <label class="text-sm w-full text-stone-500" for="nombre">Nombre:</label>
                    <input class="w-full border-b border-b-stone-200 h-8" type="text" id="nombre" name="nombre" required>
                </div>
                <div class="block w-full md:w-1/2">
                    <label class="text-sm w-full text-stone-500" for="telefono">Teléfono:</label>
                    <input class="w-full border-b border-b-stone-200 h-8" type="tel" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="md:flex md:space-x-10 space-y-5 md:space-y-0 wow fadeInRight">
                <div class="block w-full md:w-1/2">
                    <label class="text-sm w-full text-stone-500" for="correo">Correo electrónico:</label>
                    <input class="w-full border-b border-b-stone-200 h-8" type="email" id="correo" name="correo" required>
                </div>
                <div class="block w-full md:w-1/2">
                    <label class="text-sm w-full text-stone-500" for="asunto">Asunto:</label>
                    <input class="w-full border-b border-b-stone-200 h-8" type="text" id="asunto" name="asunto" required>
                </div>
            </div>
            <div class="space-y-3 wow fadeInRight">
              <label class="text-sm w-full text-stone-500" for="mensaje">Mensaje:</label>
              <textarea class="w-full border border-stone-200 h-24 rounded" id="mensaje" name="mensaje" required></textarea>
            </div>
            <x-button type="submit">Enviar</x-button>
          </form>
    </div>
</section>