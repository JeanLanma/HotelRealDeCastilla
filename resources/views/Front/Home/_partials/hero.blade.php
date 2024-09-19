<div class="bg-[url('images/hero-home.png')] bg-cover w-full min-h-screen">
    <div class="mx-auto max-w-7xl px-12 flex flex-col justify-center items-start">
        <div class="mt-[17rem]">
            <div class="text-white">
                <p class="text-4xl">
                    Bienvenido a
                </p>
                <h1 class="font-playfair font-bold">
                    <span class="text-[7rem] tracking-widest">
                        Real de Castilla 
                    </span>
                    
                    <small class="block text-5xl tracking-widest -mt-8">H O T E L E S</small>
                </h1>
                <p class="text-2xl font-normal leading-6 pt-4">
                    Reserva en línea y conoce el <br> centro histórico de Guadalajara
                </p>
            </div>
        </div>
        <div class="pt-20 mx-auto rounde-md">
            <button class="py-4 px-10 rounded-lg bg-acent-blue text-white font-bold uppercase flex items-center">
                <div class="w-6">
                    <img class="w-full" src="{{asset('icons/book-now.svg')}}" alt="Book now icon">
                </div>
                <p class="ml-4 text-xl">
                    Reserva ahora
                </p>
            </button>
        </div>
        <div class="mx-auto py-14">
            <div onclick="moveToElement('locations', 100)" class="flex flex-col items-center justify-center cursor-pointer">
                <p class="text-white font-bold text-lg">
                    Ver más
                </p>
                <div class="w-12 mt-4">
                    <img id="ScrollDownHeroElement" src="{{asset('icons/Subtraction 2.svg')}}" alt="schroll down">
                </div>
            </div>
        </div>
    </div>
</div>