@extends('Front.Layouts.master')

@section('title')
    Inicio
@endsection

@section('content')

@include('Front._partials.menu-mobile')

<section>
    @include('Front.Landing.Home._partials.hero')
</section>

<section>
    @include('Front.Landing.Home._partials.locations')
</section>

<section>
    @include('Front.Landing.Home._partials.about')
</section>

<section>
    @include('Front.Landing.Home._partials.rooms')
</section>

<section>
    @include('Front.Home._partials.map')
</section>

<footer>
    <div class="mx-auto w-full flex flex-col justify-center items-start">
        <div class="w-full bg-primary-blue text-white">
            <div class="w-full max-w-7xl mx-auto my-14 px-6 flex flex-col sm:flex-row justify-center items-center gap-8 text-sm">
                <div>
                    <div class="flex flex-col">
                        <div class="mx-auto mb-6 sm:mb-0 sm:mx-0 w-56">
                            <img class="w-full" src="{{ asset('images/logo-texto.png') }}" alt="Logo Hotel" />
                        </div>
                        <div class="lg:w-96">
                            <p>
                            Siente la tranquilidad al hospedarte en Hotel Real de Castilla, un espacio acogedor, con un servicio cálido y cordial, en el centro histórico de Guadalajara.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between sm:justify-normal w-full sm:w-auto sm:gap-8">

                    <div>
                        <div class="mb-5">
                            <strong>
                                Menú
                            </strong>
                        </div>
                        <div>
                            <ul class="flex flex-col gap-1 font-medium">
                                <li>
                                    <a href="{{ route('home') }}">
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
                                    <a href="{{ route('contact') }}">
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
                
                </div>

                <div class="mr-auto sm:mr-0">
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
                            <li class="hidden">
                                <a href="#">
                                    LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mr-auto sm:mr-0">
                <div class="mb-5">
                        <strong>
                            Contacto
                        </strong>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-1 font-medium">
                            <li>
                                <p>
                                    Hotel Real de Castilla
                                </p>
                            </li>
                            <li>
                                <p>
                                    Dirección: 184 Calle Colón, Col. Centro,  Guadalajara, 
                                    Jalisco, México
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tel: Tel: 33 3614 7675 / 33 3113 1561
                                </p>
                            </li>
                            <li>
                                <p>Correo: reservaciones@hotelrealdecastilla.com.mx</p>
                            </li>
                        </ul>
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
<script>
const moveTo = () => {
    window.scrollTo({
        top: window.innerHeight,
        behavior: 'smooth'
    });
}

const moveToElement = (element, addTopOffset = 0) => {
    const offset = document.getElementById(element).offsetTop + addTopOffset;
    window.scrollTo({
        top: offset,
        behavior: 'smooth'
    });
}
</script>
@vite('resources/js/Home/HomeAnimations.js')
@endsection

@section('js')
<script>
    const ToggleMobileMenu = () => {
        const mobileMenu = document.getElementById('mobile-menu-bg');
        mobileMenu.classList.toggle('hidden');
    }
    
    document.getElementById('mobile-menu-button').addEventListener('click', ToggleMobileMenu);
    document.getElementById('mobile-menu-bg').addEventListener('click', ToggleMobileMenu);
    document.getElementById('mobile-menu-aside').addEventListener('click', (e) => e.stopPropagation());
</script>
@endsection