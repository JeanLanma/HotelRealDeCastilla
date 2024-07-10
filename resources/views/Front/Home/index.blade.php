@extends('Front.Layouts.master')

@section('title')
    Inicio
@endsection

@section('content')

@include('Front._partials.menu')

<section>
    @include('Front.Home._partials.hero')
</section>

<section>
    @include('Front.Home._partials.locations')
</section>

<section>
    <div class="mx-auto w-full flex flex-col justify-center items-start">
        <div class="mt-40 relative">
            <img src="{{asset('images/banner-service.png')}}" alt="Banner de servicio guadalajara">
            <div class="w-96">
                <img class="w-96 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="{{asset('images/Logo-box.png')}}" alt="Logo Hotel Real de Castilla">
            </div>
        </div>
    </div>
</section>
@endsection