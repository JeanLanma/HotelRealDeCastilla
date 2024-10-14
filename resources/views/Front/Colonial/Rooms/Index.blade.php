@extends('Front.Layouts.master-child')

@section('title', 'Colonial')

@section('content')
<!-- Top Menu -->
@include('Front.Colonial._partials.menu-colonial')

<!-- Hero -->
@include('Front.Colonial.Home._partials.Hero')

<!-- About -->
@include('Front.Colonial.Home._partials.About')

<!-- Services -->
@include('Front.Colonial.Home._partials.Services')

<!-- History -->
@include('Front.Colonial.Home._partials.History')

<!-- Rooms -->
@include('Front.Colonial.Home._partials.Rooms')

<!-- Map -->
@include('Front.Colonial.Home._partials.Maps')

<!-- Footer -->
@include('Front.Colonial._partials.footer')

@endsection

@section('js')
<script>
</script>
@endsection