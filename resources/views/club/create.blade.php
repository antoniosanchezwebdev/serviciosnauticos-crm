@extends('layouts.app')

@section('title', 'Añadir club')

@section('head')
    {{-- @vite(['resources/sass/productos.scss'])
    @vite(['resources/sass/alumnos.scss']) --}}

@section('content-principal')
<div>
    @livewire('club.create-component')
</div>
@endsection


