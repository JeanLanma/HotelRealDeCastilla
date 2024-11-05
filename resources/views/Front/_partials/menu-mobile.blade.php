<header>
    <!-- Menu Desktop -->
    <div class="hidden lg:flex absolute top-0 left-0 py-0 px-24 xl:px-40 min-w-full justify-center {{ !request()->routeIs('home') ? 'bg-primary-blue' : '' }}">
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
    <!-- /Menu Desktop -->
    <!-- Menu Mobile -->
    <div class="lg:hidden bg-primary-blue">
        <div>
            <div class="px-6 pt-3">
                <img class="w-80" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel Real de Castilla">
            </div>   
        </div>
        <div class="px-3 py-3">
            <div class="flex items-center justify-end">
                <div class="mr-4">
                    <button class="px-4 py-2 text-white border border-white uppercase">Reservar</button>
                </div>    
                <div>
                    <img class="hover:text-primary-gray hover:bg-primary-dark/70" src="{{ asset('icons/menu.svg') }}" alt="Icono menu">
                </div>    
            </div>
        </div>
    </div>
</header>
<div id="mobile-menu-bg" class="hidden w-full min-h-screen bg-black/30 flex justify-end absolute">
    <aside id="mobile-menu-aside" class="bg-primary-blue w-72 min-h-screen shadow">
        <div>
            <ul class="text-white text-center font-light uppercase">
                <li class="border-b p-4 hover:text-primary-gray hover:bg-primary-dark/50">
                    <a href="#">
                        <div>
                            Inicio
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-primary-dark/50">
                    <a href="#">
                        <div>
                            Habitaciones
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-primary-dark/50">
                    <a href="#">
                        <div>
                            Servicios
                        </div>
                    </a>
                </li>
                <li class="border-b p-4 hover:text-primary-gray hover:bg-primary-dark/50">
                    <a href="#">
                        <div>
                            Contacto
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>