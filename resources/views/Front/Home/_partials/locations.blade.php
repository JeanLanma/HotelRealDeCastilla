<div id="locations" class="mx-auto max-w-7xl 2xl:px-12 flex flex-col justify-center items-start">

<div class="mt-40 flex flex-row justify-between items-center">
    <div>
        <div class="w-[33rem]">
            <img class="pulse-on-hover" src="{{asset('images/Visual-Col.jpg')}}" alt="Hotel Real de Castilla Colonial">
        </div>
    </div>
    <div class="ml-20">
        <div class="flex flex-col gap-8">
            <h2 class="text-primary-blue text-5xl font-playfair font-bold tracking-wide">
                <p>Hotel Real De Castilla</p>
                <span class="text-golden-yellow leading-relaxed">Colonial</span>
            </h2>

            <p class="text-xl font-medium text-primary-blue ">
                Disfruta de la arquitectura colonial del siglo XVII y el confort del siglo XXI que te ofrece Hotel Real de Castilla Colonial, el lugar ideal para pasar un rato agradable ...                
            </p>

            <div>
                <a target="_blank" href="{{route('home.colonial')}}">    
                    <button class="text-lg px-10 py-4 bg-golden-yellow hover:bg-primary-orange transition-colors duration-200 text-white font-bold">Reservar ahora</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mt-40 flex flex-row-reverse justify-between items-center">
    <div>
        <div class="w-[33rem]">
            <img class="pulse-on-hover" src="{{asset('images/Visual-Col-nova.jpg')}}" alt="Hotel Real de Castilla Colonial">
        </div>
    </div>
    <div class="mr-20">
        <div class="flex flex-col gap-8">
            <h2 class="text-primary-blue text-5xl font-playfair font-bold tracking-wide">
                <p>Hotel Real De Castilla</p>
                <span id="NuovoTextElement" class="text-golden-yellow leading-relaxed bounce-on-hover">Nuovo</span>
            </h2>

            <p class="text-xl font-medium text-primary-blue ">
                Siente la tranquilidad al hospedarte en Hotel Real de Castilla, un espacio acogedor, con un servicio cálido y cordial, en el centro histórico de Guadalajara.
            </p>

            <div>
                <a target="_blank" href="{{ route('home.nuovo') }}">    
                    <button class="text-lg px-10 py-4 bg-golden-yellow hover:bg-primary-orange transition-colors duration-200 text-white font-bold">Reservar ahora</button>
                </a>
            </div>
        </div>
    </div>
</div>

</div>