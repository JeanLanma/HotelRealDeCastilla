<main>
<div class="max-w-7xl m-auto py-24">
    <div>

        <div class="pb-28">

            <div>
                <h3 class="uppercase text-5xl text-primary-blue font-playfair font-bold mb-2">ESTAMOS AQUI PARA TI</h3>
            </div>
            <div class="text-2xl font-medium">
                <P class="text-primary-blue">
                    En <strong>Real de castilla</strong>, tomamos a nuestros huespedes muy en serio, por eso estamos siempre a tu disposición para cualquier duda o aclaración que necesites.
                </P>
                <p class="text-primary-blue">
                    Si tienes alguna pregunta, comentario o sugerencia, no dudes en contactarnos.
                </p>
            </div>

        </div>
        <div class="flex justify-between gap-x-12">

            <div class="w-6/12 text-3xl font-medium text-primary-blue flex flex-col gap-y-2">
                    <p>
                        184 Calle Colón, Col. Centro, <br> 
                        Guadalajara, Jalisco.
                    </p>
                    <p>
                        <a href="#" class="flex items-center mb-2">
                            <p class="font-bold">
                                Ver mapa
                                <span class="ml-10">
                                    <img src="{{asset('icons/ArrowR.svg')}}" alt="">
                                </span>
                            </p>
                        </a>
                    </p>
                    <p>
                        Telefonos: 33 3614 7675 & 33 3113 1561
                    </p>
                    <p>
                        reservaciones@hotelrealdecastilla.com.mx
                    </p>
            </div>

            <div class="w-5/12">
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <div class="font-playfair font-medium text-xl text-primary-blue flex flex-col gap-y-6">
                        <div class="flex flex-col">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="border border-primary-blue/75 px-2 py-3 @error('name') border-red-500 @enderror">
                            @error('name')
                                <span id="error-name" class="text-base font-bold text-red-600">Este campo es necesario</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Correo electrónico</label>
                            <input type="text" name="email" id="email" value="{{ old('email') }}" class="border border-primary-blue/75 px-2 py-3 @error('email') border-red-500 @enderror">
                            @error('email')
                                <span  id="error-email" class="text-base font-bold text-red-600">Este campo es necesario, y debe ser un correo valido</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" class="border border-primary-blue/75 px-2 py-3 @error('message') border-red-500 @enderror" rows="8">{{ old('message') }}</textarea>
                            @error('message')
                                <span  id="error-message" class="text-base font-bold text-red-600">Este campo es necesario</span>
                            @enderror
                        </div>

                        <div class="w-full flex justify-end">
                            <button type="submit" class="rounded-md bg-golden-yellow font-sans text-white font-bold p-4">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</main>