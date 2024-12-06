<section class="swiper RoomsSwiper relative">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="flex flex-col-reverse sm:flex-row-reverse justify-between items-start sm:min-h-screen">
                <div class="bg-primary-dark sm:w-1/2 text-primary-light">
                    <div class="w-full pb-24 sm:pb-0 sm:h-screen pl-7 pt-7 sm:pl-20 sm:pt-[6.2rem]">

                        <div class=" flex items-baseline text-[.6rem] text-primary-gray mb-6">
                            <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                            <p class="ml-3">2 Huespedes</p>
                        </div>
                        
                        <h2 class="text-4xl font-semibold tracking-wide mb-10 sm:mb-[5rem] font-playfair">
                            Habitación con cama extragrande
                        </h2>

                        <ul class="list-disc text-sm pl-4 mb-10 sm:mb-[5rem]">
                            <li class="mt-2">1 cama King size</li>
                            <li class="mt-2">TV por cable</li>
                            <li class="mt-2">Teléfono</li>
                            <li class="mt-2">Wifi</li>
                            <li class="mt-2">Aire acondicionado</li>
                            <li class="mt-2">Baño completo con todas sus amenidades</li>
                        </ul>

                        <div>
                            <button onclick="window.location.href = '{{route('direct.booking', ['hotel'=>'nuovo'])}}'" class="text-xs font-semibold uppercase border border-white rounded-full px-5 py-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Reservar ahora</button>
                        </div>

                    </div>
                </div>
                <div class="sm:w-1/2">
                    <div class="w-full sm:h-screen">
                        <img class="w-full sm:h-screen object-cover pane-ltr" src="{{asset('images/habitaciones/habitacion-king-size-01.jpg')}}" alt="Habitacion Extra grande Hotel Real de Castilla">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-slide">
            <div class="flex flex-col-reverse sm:flex-row-reverse justify-between items-start sm:min-h-screen">
                <div class="bg-primary-dark sm:w-1/2 text-primary-light">
                    <div class="w-full pb-24 sm:pb-0 sm:h-screen pl-7 pt-7 sm:pl-20 sm:pt-[6.2rem]">

                        <div class=" flex items-baseline text-[.6rem] text-primary-gray mb-6">
                            <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                            <p class="ml-3">4 Huespedes</p>
                        </div>
                        
                        <h2 class="text-4xl font-semibold tracking-wide mb-10 sm:mb-[5rem] font-playfair">
                            Habitación Cuádruple Estándar
                        </h2>

                        <ul class="list-disc text-sm pl-4 mb-10 sm:mb-[5rem]">
                            <li class="mt-2">2 camas matrimoniales</li>
                            <li class="mt-2">TV por cable</li>
                            <li class="mt-2">Teléfono</li>
                            <li class="mt-2">Wifi</li>
                            <li class="mt-2">Aire acondicionado</li>
                            <li class="mt-2">Baño completo con todas sus amenidades</li>
                        </ul>

                        <div>
                            <button onclick="window.location.href = '{{route('direct.booking', ['hotel'=>'nuovo'])}}'" class="text-xs font-semibold uppercase border border-white rounded-full px-5 py-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Reservar ahora</button>
                        </div>

                    </div>
                </div>
                <div class="sm:w-1/2">
                    <div class="w-full sm:h-screen">
                        <img class="w-full sm:h-screen object-cover pane-ltr" src="{{asset('images/habitaciones/habitacion-cuadruple-estandar.jpg')}}" alt="Habitacion cuadruple estandar queen">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="flex flex-col-reverse sm:flex-row-reverse justify-between items-start sm:min-h-screen">
                <div class="bg-primary-dark sm:w-1/2 text-primary-light">
                    <div class="w-full pb-24 sm:pb-0 sm:h-screen pl-7 pt-7 sm:pl-20 sm:pt-[6.2rem]">

                        <div class=" flex items-baseline text-[.6rem] text-primary-gray mb-6">
                            <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                            <p class="ml-3">4 Huespedes</p>
                        </div>
                        
                        <h2 class="text-4xl font-semibold tracking-wide mb-10 sm:mb-[5rem] font-playfair">
                            Habitación Cuádruple Estándar
                        </h2>

                        <ul class="list-disc text-sm pl-4 mb-10 sm:mb-[5rem]">
                            <li class="mt-2">2 camas Queen size</li>
                            <li class="mt-2">TV por cable</li>
                            <li class="mt-2">Teléfono</li>
                            <li class="mt-2">Wifi</li>
                            <li class="mt-2">Aire acondicionado</li>
                            <li class="mt-2">Baño completo con todas sus amenidades</li>
                        </ul>

                        <div>
                            <button onclick="window.location.href = '{{route('direct.booking', ['hotel'=>'nuovo'])}}'" class="text-xs font-semibold uppercase border border-white rounded-full px-5 py-3 hover:text-primary-dark hover:bg-white transition-colors duration-200">Reservar ahora</button>
                        </div>

                    </div>
                </div>
                <div class="sm:w-1/2">
                    <div class="w-full sm:h-screen">
                        <img class="w-full sm:h-screen object-cover pane-ltr" src="{{asset('images/habitaciones/habitacion-cuadruple-estandar-queen.jpg')}}" alt="Habitacion cuadruple estandar queen">
                    </div>
                </div>
            </div>
        </div>
                
    </div>
        <!-- Slide Navigation -->
    <div class="prevRoomEl absolute bottom-3 sm:bottom-16 right-[60%] sm:right-[40%] z-10 cursor-pointer w-fit" id="prev-room-btn">
        <svg id="prevRoomEl" fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Circle_Chev_Left" data-name="Circle Chev Left"> <g> <path d="M10.15,12.35a.492.492,0,0,1,0-.7l3-3a.495.495,0,0,1,.7.7L11.21,12l2.64,2.65a.495.495,0,0,1-.7.7Z"></path> <path d="M12,21.933A9.933,9.933,0,1,1,21.933,12,9.944,9.944,0,0,1,12,21.933ZM12,3.067A8.933,8.933,0,1,0,20.933,12,8.943,8.943,0,0,0,12,3.067Z"></path> </g> </g> </g></svg>
    </div>
    <div class="nextRoomEl absolute bottom-3 sm:bottom-16 right-1/3 z-10 cursor-pointer w-fit" id="next-room-btn">
        <svg id="nextRoomEl" fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Circle_Chev_Right" data-name="Circle Chev Right"> <g> <path d="M13.85,11.65a.492.492,0,0,1,0,.7l-3,3a.495.495,0,0,1-.7-.7L12.79,12,10.15,9.35a.495.495,0,0,1,.7-.7Z"></path> <path d="M12,2.067A9.933,9.933,0,1,1,2.067,12,9.944,9.944,0,0,1,12,2.067Zm0,18.866A8.933,8.933,0,1,0,3.067,12,8.943,8.943,0,0,0,12,20.933Z"></path> </g> </g> </g></svg>
    </div>
    <!-- /Slide Navigation -->
</section>