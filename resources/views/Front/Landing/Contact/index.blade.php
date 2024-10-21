@extends('Front.Layouts.master')

@section('title')
    Contacto
@endsection

@section('content')

@include('Front._partials.menu')

@include('Front.Landing.Contact._partials.header')

@include('Front.Landing.Contact._partials.contact-form')

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

                <div class="hidden">
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

@section('js')
<script>
const CleanInputErrors = (errorEl, errorEl2, delay = 0, classToRemove = null) => {
    errorEl = document.getElementById(errorEl);
    errorEl2 = document.getElementById(errorEl2);
    ClassToRemove = classToRemove ?? 'border-red-500';
    
    if(errorEl == null || errorEl2 == null){
        return;
    }

    setTimeout(() => {
        if(errorEl){
            errorEl.style.display = 'none';
        }
        if(errorEl2 && errorEl2.classList.contains(ClassToRemove)){
            errorEl2.classList.remove(ClassToRemove);
            
        }
        console.log(`Error element: cleaned`);
    }, delay);
}

CleanInputErrors('error-name', 'name', 6000);
CleanInputErrors('error-email', 'email', 6000);
CleanInputErrors('error-message', 'message', 6000);
</script>

@if (session('success'))
@vite('resources/js/Alerts/successEmail.js')
@endif
@endsection