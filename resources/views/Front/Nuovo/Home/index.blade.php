@extends('Front.Layouts.master-child')

@section('title', 'Nuovo')

@section('content')
<!-- Top Menu -->
@include('Front._partials.menu-hotels')

<!-- Hero -->
@include('Front.Nuovo.Home._partials.Hero')

<!-- About -->
@include('Front.Nuovo.Home._partials.About')

<!-- Services -->
@include('Front.Nuovo.Home._partials.Services')

<!-- History -->
@include('Front.Nuovo.Home._partials.History')

<!-- Rooms -->
@include('Front.Nuovo.Home._partials.Rooms')

<!-- Map -->
@include('Front.Nuovo.Home._partials.Maps')

<!-- Footer -->
@include('Front.Nuovo._partials.footer')

<!-- Popup Guests -->
<section>
    <div id="PopupGuests" class="fixed inset-0 bg-black bg-opacity-50 hidden">
        <div class="flex justify-center items-center h-screen">
            <div class="bg-white w-[30rem] h-48 flex flex-col justify-center items-center gap-y-4">
                <div>
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div>
                            <p class="font-bold">Huespedes</p>
                        </div>
                        <div>
                            <button id="ClosePopupGuests" class="text-black
                            hover:text-primary-orange transition-colors duration-200">
                                <!-- <img src="{{asset('icons/close.svg')}}" alt="Cerrar"> -->
                                 Cerrar
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-center items-center gap-x-4">
                        <div class="flex">
                            <button id="DecreaseGuests" class="text-black
                            hover:text-primary-orange transition-colors duration-200">
                                <img src="{{asset('icons/minus.svg')}}" alt="Menos">
                            </button>
                        </div>
                        <div>
                            <p id="Guests">01</p>
                        </div>
                        <div class="flex">
                            <button id="IncreaseGuests" class="text-black
                            hover:text-primary-orange transition-colors duration-200">
                                <img src="{{asset('icons/plus.svg')}}" alt="Mas">
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="AcceptGuests" class="bg-primary-orange hover:bg-white text-white hover:text-primary-orange border border-primary-orange  px-4 py-2 rounded-full transition-colors duration-200">
                        Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
@vite('resources/js/DatePicker/DatePicker.js')
<script>

</script>
@endsection