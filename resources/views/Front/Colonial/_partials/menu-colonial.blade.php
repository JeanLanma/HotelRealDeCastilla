<header>
    <div class="bg-primary-dark w-full">
        <div class="max-w-7xl mx-auto">

            <div class="flex justify-between items-center px-12 py-3">

                <div>
                    <a href="#" class="block w-56 px-4">
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
                                <a href="#">Contacto</a>
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
</header>