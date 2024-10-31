<header class="relative">
    <div class="absolute top-0 left-0 py-0 px-24 xl:px-40 min-w-full flex justify-center {{ !request()->routeIs('home') ? 'bg-primary-blue' : '' }}">
        <div class="w-full max-w-7xl flex justify-between items-center relative top-0 left-0 py-0 2xl:px-12 sm:h-28">
            <div>
                <div class="bg-primary-blue h-32 xl:h-[10.6rem] absolute -top-4 flex items-center rounded-b-[3rem]">
                    <a href="{{ route('home') }}" class="block w-52 xl:w-[17rem] px-4">
                        <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel" />
                    </a>
                </div>
            </div>
            <div>
                <nav>
                    <ul class="flex justify-between gap-x-6 xl:gap-x-[3.2rem] text-white font-medium xl:text-[1.2rem] leading-6">
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