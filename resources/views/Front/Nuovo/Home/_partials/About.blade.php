<section>
    <div class="max-w-7xl mx-auto px-7 sm:px-14 py-20">
        <div class="flex flex-col md:flex-row justify-between items-start gap-x-14 min-h-screen">
            <div class="md:w-1/2 mt-3">
                <div>
                    <div class="flex items-baseline text-[.6rem] text-primary-gray mb-7">
                        <span><img src="{{asset('icons/Line.svg')}}" alt=""></span>
                        <p class="ml-3">Hotel Real De Castilla Nuovo</p>
                    </div>
                    <h2 class="text-3xl font-bold tracking-wide mb-7 font-playfair">
                        Conoce Guadalajara
                    </h2>
                    <p class="text-sm font-medium mb-7">
                        Disfruta de la arquitectura colonial del siglo XVII y el confort del siglo XXI que te ofrece Hotel Real de Castilla, el lugar ideal para pasar un rato agradable con tu familia, un viaje de negocios o unas vacaciones románticas con tu pareja. Donde por su excelente ubicación tendrás de todo lo que el centro histórico de Guadalajara te ofrece a unos cuantos pasos; como la Catedral de Guadalajara, el Hospicio Cabañas o el Teatro Degollado que son algunos de los edificios emblemáticos que tendrás cerca.
                    </p>
                    <div>
                        <a href="{{ route('direct.booking', ['hotel'=>'nuovo']) }}">
                            <button id="AboutButton" class="text-xs uppercase border border-black rounded-full px-4 py-2 hover:text-white hover:bg-black transition-colors duration-200">Reservar ahora</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="md:p-3 mt-6 md:mt-0">
                    <img src="{{asset('images/conoce-guadalajara.jpg')}}" alt="Conoce Guadalajara">
                </div>
            </div>
        </div>
    </div>
</section>