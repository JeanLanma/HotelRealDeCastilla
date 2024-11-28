<section>
    <div class="bg-[url('images/hero-home.png')] bg-cover w-full h-calc-menu flex">
        
        <div class="max-w-7xl px-7 lg:px-14 mx-auto w-full flex flex-col justify-between mt-20 xl:mt-56">            
            <div>
                <div class="text-white">
                    <h1 class="text-2xl font-bold tracking-wide mb-7">
                        Hotel Real de Castilla <span class="text-golden-yellow">Colonial</span>
                    </h1>
                    <p class="lg:text-lg lg:font-playfair lg:font-bold w-64">
                        Reserva en línea y conoce el centro histórico de Guadalajara
                    </p>
                </div>
            </div>

            <div class="self-center -mb-12 sm:mb-0">
                <div>
                    <div class="text-white bg-primary-dark w-80 md:w-[50rem] text-xs font-semibold tracking-wide px-9 py-9 lg:py-7">
                        <div class="flex flex-col sm:flex-row justify-center items-center gap-x-14">
                        
                            <div id="GuestsTrigger" class="w-full mb-12 sm:mb-0 sm:w-auto flex items-start gap-4 hover:cursor-pointer hover:text-primary-orange">
                                <div>
                                    <img src="{{asset('icons/guest.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Huespedes</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <p id="GuestsDisplay">01</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="DateCheckInTrigger" class="w-full mb-12 sm:mb-0 sm:w-auto flex items-start gap-4 hover:cursor-pointer hover:bg-white/30 transition-colors duration-200">
                                <div>
                                    <img src="{{asset('icons/calendar.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Check in</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input id="DateCheckInInput" name="check-in" type="date" class="hidden">
                                        <p id="DateCheckInDisplay">09 mar 2024</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>

                            <div id="DateCheckOutTrigger" class="w-full mb-12 sm:mb-0 sm:w-auto flex items-start gap-4">
                                <div>
                                    <img src="{{asset('icons/calendar.svg')}}" alt="Icono Huesped">
                                </div>
                                <div>
                                    <div>
                                        <p>Check out</p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input id="DateCheckOutInput" name="check-out" type="date" class="hidden">
                                        <p id="DateCheckOutDisplay">12 mar 2024</p>
                                        <span class="pl-2"><img src="{{asset('icons/down-chevron.svg')}}" alt="downArrow"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 sm:mt-0 w-full sm:w-auto">
                                <button id="BookingWidgetBtn" class="w-full bg-primary-orange text-white font-semibold py-5 px-10 rounded-[5px] hover:bg-primary-dark ring-2 ring-primary-orange ring-inset transition-colors duration-150">
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