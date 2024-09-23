<header class="relative">
    <div class="absolute top-0 left-0 py-0 min-w-full flex justify-center {{ !request()->routeIs('home') ? 'bg-primary-blue' : '' }}">
        <div class="w-full max-w-7xl flex justify-between items-center relative top-0 left-0 py-0 2xl:px-12 sm:h-28">
            <div>
                <div class="bg-primary-blue h-[11.4rem] absolute -top-4 flex items-center rounded-b-[3rem]">
                    <a href="#" class="block w-72 px-4">
                        <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel" />
                    </a>
                </div>
            </div>
            <div>
                <nav>
                    <ul class="flex justify-between gap-x-[3.5rem] text-white font-normal text-xl leading-6">
                        <li class="px-1 hover:border-b-2 {{ request()->routeIs('home') ? 'border-b-2 font-bold' : '' }}">
                            <a href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="px-1 hover:border-b-2">
                            <a href="#">Habitaciones</a>
                        </li>
                        <li class="px-1 hover:border-b-2 ">
                            <a href="#">Servicios</a>
                        </li>
                        <li class="px-1 hover:border-b-2 {{ request()->routeIs('contact') ? 'border-b-2 font-bold' : '' }}">
                            <a href="{{ route('contact') }}">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>