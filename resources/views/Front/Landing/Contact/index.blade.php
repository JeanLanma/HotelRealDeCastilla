@extends('Front.Layouts.master')

@section('title')
    Contacto
@endsection

@section('content')

@include('Front._partials.menu')

@include('Front.Landing.Contact._partials.header')

<main>
<div class="max-w-7xl m-auto py-24">
    <div>

        <div class="pb-24">

            <div>
                <h3 class="uppercase text-5xl text-primary-blue font-playfair font-bold">ESTAMOS AQUI PARA TI</h3>
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
        <div class="flex gap-x-12">

            <div class="w-6/12 text-3xl font-medium text-primary-blue flex flex-col">
                    <p>
                        184 Calle Colón, Col. Centro, <br> 
                        Guadalajara, Jalisco.
                    </p>
                    <p>
                        <a href="#" class="flex items-center">
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

            <div class="w-4/12">
                <form action="#">
                    <div class="font-playfair font-medium text-xl text-primary-blue flex flex-col gap-y-6">
                        <div class="flex flex-col">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="border border-primary-blue/75 px-2 py-3">
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Correo electrónico</label>
                            <input type="text" name="email" id="email" class="border border-primary-blue/75 px-2 py-3">
                        </div>
                        <div class="flex flex-col">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" class="border border-primary-blue/75 px-2 py-3"></textarea>
                        </div>

                        <div class="w-full flex justify-end">
                            <button class="rounded-md bg-golden-yellow font-sans text-white font-bold p-4">
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

@section('js-header')
@endsection