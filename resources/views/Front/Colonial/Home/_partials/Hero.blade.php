<section>
    <!-- <div class="bg-[url('images/hero-home.png')] bg-cover w-full min-h-screen  flex items-end"> -->
    <div class="bg-[url('images/hero-home.png')] bg-cover w-full h-calc-menu  flex items-end">
        
        <div class="max-w-7xl px-14 mx-auto w-full flex flex-col justify-end gap-y-16 2xl:gap-y-36">            
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
                        
                            <div id="GuestsTrigger" class="flex items-start gap-4 hover:cursor-pointer hover:text-primary-orange">
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
                            
                            <div id="DateCheckInTrigger" class="flex items-start gap-4 hover:cursor-pointer hover:bg-white/30 transition-colors duration-200">
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

                            <div id="DateCheckOutTrigger" class="flex items-start gap-4">
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

                            <div>
                                <button class="bg-primary-orange text-white font-semibold py-5 px-10 rounded-[5px] hover:bg-primary-dark ring-2 ring-primary-orange ring-inset transition-colors duration-150">
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