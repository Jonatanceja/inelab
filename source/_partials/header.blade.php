<nav
      class="flex items-center justify-between flex-wrap p-4 fixed w-full z-50 top-0"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-xl bg-stone-100' : isOpen , 'bg-white' : !isOpen}"
    >
      <!--Logo etc-->
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ $page->Url }}/">
        <img class="w-24 md:w-32" src="/assets/images/inelab.svg" alt="Logo Inelab">
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-sky-400 focus:outline-none focus:text-aky-500 text-xl"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
      <ul
          class="lg:pt-0 list-reset lg:flex justify-end lg:flex-1 items-center mt-10 md:mt-0 text-center md:text-left"
        >
          <li class="">
            <a
              class="inline-block py-2 px-4 text-stone-900 no-underline hover:text-sky-500 uppercase tracking-wider md:border-b-2 md:border-white md:hover:border-sky-500 transition h-full"
              href="{{ $page->baseUrl }}/"
              @click="isOpen = false"
              >Inicio
            </a>
          </li>
          <li class="">
            <a
              class="inline-block py-2 px-4 text-stone-900 no-underline hover:text-sky-500 uppercase tracking-wider md:border-b-2 md:border-white md:hover:border-sky-500 transition h-full"
              href="{{ $page->baseUrl }}/nosotros"
              @click="isOpen = false"
              >Nosotros
            </a>
          </li>
          <li class="">
            <a
              class="inline-block py-2 px-4 text-stone-900 no-underline hover:text-sky-500 uppercase tracking-wider md:border-b-2 md:border-white md:hover:border-sky-500 transition h-full"
              href="{{ $page->baseUrl }}/servicios"
              @click="isOpen = false"
              >Servicios
            </a>
          </li>
          <li class="md:px-3 px-0 py-5 md:py-0">
            <a
              class="bg-sky-400 px-5 py-3 text-white rounded font-bold hover:bg-sky-300 uppercase tracking-wider"
              href="{{ $page->baseUrl }}/contacto"
              @click="isOpen = false"
              >Contacto
            </a>
          </li>
      </ul>
      </div>
    </nav>
