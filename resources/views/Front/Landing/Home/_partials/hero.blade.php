<div class="bg-[url('images/hero-home.png')] bg-cover bg-center bg-no-repeat w-full min-h-screen">
    <div class="mx-auto max-w-7xl px-6 lg:px-24 flex flex-col justify-center items-start">
        <div class="mt-28 lg:mt-44 xl:mt-60">
            <div class="text-white">
                <p class="lg:text-3xl xl:text-4xl">
                    Bienvenido a
                </p>
                <h1 class="font-playfair font-bold">
                    <span class="text-4xl lg:text-7xl 2xl:text-[6.2rem] tracking-widest leading-snug">
                        Real de Castilla 
                    </span>
                    
                    <small class="block text-base lg:text-4xl 2xl:text-5xl tracking-widest -mt-2">H O T E L E S</small>
                </h1>
                <p class="font-normal 2xl:text-2xl 2xl:leading-6 pt-4 xl:pt-4">
                    Reserva en línea y conoce el <br> centro histórico de Guadalajara
                </p>
            </div>
        </div>
        <div class="pt-16 xl:pt-20 mx-auto rounde-md">
            <button onclick="moveToElement('locations', 100)" class="py-2 px-5 xl:py-4 xl:px-10 rounded-lg bg-acent-blue text-white font-semibold xl:font-bold uppercase flex items-center">
                <div class="w-4 xl:w-6">
                    <img class="w-full" src="{{asset('icons/book-now.svg')}}" alt="Book now icon">
                </div>
                <p class="ml-4 text-sm xl:text-lg">
                    Reserva ahora
                </p>
            </button>
        </div>
        <div class="mx-auto py-7 xl:py-14">
            <div onclick="moveToElement('locations', 100)" class="flex flex-col items-center justify-center cursor-pointer">
                <p class="text-white font-semibold xl:font-bold text-sm xl:text-lg">
                    Ver más
                </p>
                <div class="w-10 xl:w-12 mt-4">
                    <img id="ScrollDownHeroElement" src="{{asset('icons/Subtraction 2.svg')}}" alt="schroll down">
                </div>
            </div>
        </div>
    </div>
</div>