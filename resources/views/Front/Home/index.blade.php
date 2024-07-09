@extends('Front.Layouts.master')

@section('title')
    Inicio
@endsection


@section('content')

@include('Front._partials.menu')

<section>
    <!-- <div class="bg-cover w-full min-h-screen" style="background-image: url('{{asset("/images/hero-home.png")}}')"> -->
    <!-- <div class="bg-[url('{{asset("/images/hero-home.png")}}')] bg-cover w-full min-h-screen"> -->
    <div class="bg-[url('images/hero-home.png')] bg-cover w-full min-h-screen">

    </div>
</section>
@endsection