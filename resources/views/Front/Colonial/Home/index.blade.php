@extends('Front.Layouts.master-child')

@section('title', 'Colonial')

@section('content')
<!-- Top Menu -->
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
                                <a href="#">Inicio</a>
                            </li>
                            <li class="px-1 hover:border-b-2">
                                <a href="#">Habitaciones</a>
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

<!-- Hero -->
<section>
    <div class="bg-[url('images/hero-home.png')] bg-cover w-full min-h-screen  flex items-end">
        
        <div class="max-w-7xl px-14 mx-auto w-full flex flex-col justify-end gap-y-36">            
            <div>
                <div class="text-white">
                    <h1 class="text-2xl font-bold tracking-wide mb-7">
                        Hotel real de Castilla Colonial
                    </h1>
                    <p class="text-lg font-playfair font-bold w-60">
                        Reserva en línea y conoce el centro histórico de Guadalajara
                    </p>
                </div>
            </div>

            <div class="self-center">
                <div>
                    <div class="text-white bg-primary-dark w-[50rem] text-xs font-semibold tracking-wide px-9 py-7">
                        <div class="flex justify-center items-center gap-x-14">
                        
                            <div class="flex items-start gap-4">
                                <div>
                                    <img src="{{asset('icons/guest.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Huespedes</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <p>01</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div>
                                    <img src="{{asset('icons/calendar.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Check in</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <p>09 mar 2024</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <img src="{{asset('icons/calendar.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Check out</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <p>12 mar 2024</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button class="bg-primary-orange text-white font-semibold py-5 px-10 rounded-[5px]">
                                    Book now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</section>

<!-- About -->
<section>
    <div class="max-w-7xl mx-auto px-14 py-20">
        <div class="flex justify-between items-start gap-x-14 min-h-screen">
            <div class="w-1/2 mt-3">
                <div>
                    <div class="flex items-baseline text-[.6rem] text-primary-gray mb-7">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">Hotel Real De Castilla Colonial</p>
                    </div>
                    <h2 class="text-3xl font-bold tracking-wide mb-7 font-playfair">
                        Conoce Guadalajara
                    </h2>
                    <p class="text-sm font-medium mb-7">
                        Disfruta de la arquitectura colonial del siglo XVII y el confort del siglo XXI que te ofrece Hotel Real de Castilla, el lugar ideal para pasar un rato agradable con tu familia, un viaje de negocios o unas vacaciones románticas con tu pareja. Donde por su excelente ubicación tendrás de todo lo que el centro histórico de Guadalajara te ofrece a unos cuantos pasos; como la Catedral de Guadalajara, el Hospicio Cabañas o el Teatro Degollado que son algunos de los edificios emblemáticos que tendrás cerca.
                    </p>
                    <div>
                        <button class="text-xs uppercase border border-black rounded-full px-4 py-2 hover:text-white hover:bg-black transition-colors duration-200">Reservar ahora</button>
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                <div class="p-3">
                    <img src="{{asset('images/conoce-guadalajara.jpg')}}" alt="Conoce Guadalajara">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section>
    <div class="bg-primary-light">
        <div class="max-w-7xl mx-auto px-14 py-20">
            <div>
                <div>
                    <div class="flex items-baseline text-[.6rem] text-primary-gray mb-7">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">Nuestros sercivios</p>
                    </div>
                    <h2 class="text-3xl font-bold tracking-wide mb-7 font-playfair">
                        Nos encargamos de todo
                    </h2>
                </div>
            </div>
            <div class="flex justify-between">

                <div class="flex flex-col items-center">
                    <div class="w-[249px] rounded-full overflow-hidden mb-4 border border-primary-gray p-[.12rem]">
                        <img class="rounded-full overflow-hidden" src="{{asset('images/services/servicio-habitacion 1.png')}}" alt="Servicio Real de Castilla a la habitación">                        
                    </div>
                    <div>
                        <p class="font-bold">Servicio a la habitación</p>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-[249px] rounded-full overflow-hidden mb-4 border border-primary-gray p-[.12rem]">
                        <img class="rounded-full overflow-hidden" src="{{asset('images/services/servicio-2.png')}}" alt="Servicio Real de Castilla Restaurante">                        
                    </div>
                    <div>
                        <p class="font-bold">Restaurante</p>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-[249px] rounded-full overflow-hidden mb-4 border border-primary-gray p-[.12rem]">
                        <img class="rounded-full overflow-hidden" src="{{asset('images/services/servicio-3.png')}}" alt="Servicio Real de Castilla Tours">                        
                    </div>
                    <div>
                        <p class="font-bold">Tours</p>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-[249px] rounded-full overflow-hidden mb-4 border border-primary-gray p-[.12rem]">
                        <img class="rounded-full overflow-hidden" src="{{asset('images/services/servicio-4.png')}}" alt="Servicio Real de Castilla Lavanderia">                        
                    </div>
                    <div>
                        <p class="font-bold">Lavanderia</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- History -->
<section>
    <div class="w-full bg-primary-bronze">
        <div class="max-w-7xl mx-auto px-14 py-20">
            <div class="text-white flex flex-col justify-center mx-auto w-fit">
                <div>
                    <div class="flex items-baseline text-[.6rem] text-primary-gray mb-7">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">Nuestras habitaciones</p>
                    </div>
                    <h4 class="text-3xl font-bold tracking-wide mb-7 font-playfair">
                        Elegancia, confort y comodidad
                    </h4>
                </div>
                <p>
                    Siente la alegría de conocer la historia de Guadalajara, de contemplar la belleza de <br> su arquitectura y de hospedarte en las comodidades que te ofrece Hotel Real de <br> Castilla Colonial.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Rooms -->
<section>
    <div>
        <div class="flex flex-row-reverse justify-between items-start min-h-screen">
            <div class="bg-primary-dark w-1/2 text-primary-light">
                <div class="w-full h-screen pl-20 pt-[6.2rem]">

                    <div class=" flex items-baseline text-[.6rem] text-primary-gray mb-6">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">4 Huespedes</p>
                    </div>
                    
                    <h2 class="text-4xl font-semibold tracking-wide mb-[5rem] font-playfair">
                        Habitación Doble Queen
                    </h2>

                    <ul class="list-disc text-sm pl-4 mb-[5rem]">
                        <li class="mt-2">2 camas queen size</li>
                        <li class="mt-2">TV por cable</li>
                        <li class="mt-2">Teléfono</li>
                        <li class="mt-2">Wifi</li>
                        <li class="mt-2">Aire acondicionado</li>
                        <li class="mt-2">Baño completo con todas sus amenidades</li>
                    </ul>

                    <div>
                        <button class="text-xs font-semibold uppercase border border-white rounded-full px-5 py-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Reservar ahora</button>
                    </div>

                </div>
            </div>
            <div class="w-1/2">
                <div class="w-full h-screen">
                    <img class="w-full h-screen" src="{{asset('images/habitaciones/habitacion-doble-queen.png')}}" alt="Habitacion doble queen">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section>
    <div>
        <div class="flex justify-between items-start min-h-screen">
            <div class="bg-primary-bronze w-1/2 text-primary-light">
                <div class="w-full h-screen pl-20 pt-[6.2rem]">

                    <div class=" flex items-baseline text-[.6rem] text-primary-gray mb-6">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">Encuentranos</p>
                    </div>

                    <ul class="text-sm mb-[5rem]">
                        <li class="mt-2">
                            DIRECCIÓN
                            <br>
                            184 Calle Colón, Col. Centro, Guadalajara, Jalisco.
                        </li>
                        <li class="mt-8">
                            TELÉFONOS
                            <br>
                            33 3614 7675 & 33 3113 1561
                        </li>
                        <li class="mt-8">
                            EMAIL
                            <br>
                            reservaciones@hotelrealdecastilla.com.mx
                        </li>
                    </ul>

                    <div>
                        <button class="text-xs font-semibold border border-white rounded-full px-5 py-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Como llegar</button>
                    </div>

                </div>
            </div>
            <div class="w-1/2">
                <div class="w-full h-screen">
                    <img class="w-full h-screen" src="{{asset('images/services/map.png')}}" alt="Habitacion doble queen">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="mx-auto w-full flex flex-col justify-center items-start">
        <div class="w-full bg-primary-blue text-white">
            <div class="w-full max-w-7xl mx-auto my-14 flex justify-center items-center gap-8 text-sm">
                <div>
                    <div class="flex flex-col">
                        <div class="w-56">
                            <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel" />
                        </div>
                        <div class="w-96">
                            <p>
                            Siente la tranquilidad al hospedarte en Hotel Real de Castilla, un espacio acogedor, con un servicio cálido y cordial, en el centro histórico de Guadalajara.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="mb-5">
                        <strong>
                            Menú
                        </strong>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-1 font-medium">
                            <li>
                                <a href="#">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Habitaciones
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="mb-5">
                        <strong>
                            Legal
                        </strong>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-1 font-medium">
                            <li>
                                <a href="#">
                                    Política de privacidad
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Términos y condiciones
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="mb-5">
                        <strong>
                            Social Media
                        </strong>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-1 font-medium">
                            <li>
                                <a href="#">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="mb-5">
                        <strong>
                            Newsletter
                        </strong>
                    </div>
                    <div class="2xl:w-96 w-64">
                        <p>
                            Suscríbase a nuestro boletín para obtener las últimas ofertas en nuestras habitaciones y descuentos de vacaciones.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-12 mt-20">
                    <p class="text-center font-bold">
                        Pcbtroniks
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection