<header>
    <div id="colonial-menu-desktop" class="hidden sm:block bg-primary-dark w-full">
        <div class="max-w-7xl mx-auto">

            <div class="flex justify-between items-center px-12 py-3">

                <div>
                    <a href="{{ route('home.colonial') }}" class="block w-56 px-4">
                        <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel" />
                    </a>
                </div>
                <div>
                    <nav>
                        <ul class="flex justify-between gap-x-4 text-white font-normal 2xl:text-base text-sm leading-6">
                            <li class="px-1 border-b-2 font-semibold">
                                <a href="{{ route('home.colonial') }}">Inicio</a>
                            </li>
                            <li class="px-1 hover:border-b-2">
                                <a href="{{ route('hotel.colonial.rooms') }}">Habitaciones</a>
                            </li>
                            <li class="px-1 hover:border-b-2">
                                <a href="#">Servicios</a>
                            </li>
                            <li class="px-1 hover:border-b-2">
                                <a href="#">Tours</a>
                            </li>
                            <li class="px-1 hover:border-b-2">
                                <a href="{{ route('contact') }}">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div>
                    <div>
                            <button class="text-white text-sm tracking-widest border border-white py-2 px-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Reservar ahora</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="colonial-menu-mobile" class="sm:hidden bg-primary-dark w-full px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="w-56">
                <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel Real de Castillas" />
            </div>
            <div class="w-16">
                <img id="colonial-menu-mobile-button" class="w-full hover:bg-white/50" src="{{ asset('icons/menu.svg') }}" alt="Icono menu">   
            </div>
        </div>
    </div>
</header>
<div id="colonial-mobile-menu-bg" class="hidden w-full min-h-screen bg-black/30 flex justify-end absolute">
    <aside id="colonial-mobile-menu-aside" class="bg-primary-dark w-72 min-h-screen shadow">
        <div>
            <ul class="text-white text-center font-light uppercase">
                <li class="border-b p-4 hover:text-primary-gray hover:bg-white/25">
                    <a href="{{ route('home.nuovo') }}">
                        <div>
                            Inicio
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-white/25">
                    <a href="#">
                        <div>
                            Habitaciones
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-white/25">
                    <a href="#">
                        <div>
                            Servicios
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-white/25">
                    <a href="{{ route('contact') }}">
                        <div>
                            Contacto
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>