@extends("layouts.main_layout")

@section("content")
    <h3>Este texto faz parta da view.</h3>
    {{-- Renderizar o component: --}}
    <x-my-component />

    {{-- Renderizar component que existe dentro de subpasta. --}}
    <x-admin.admin-card />
    <h3>Este texto faz parte da view.</h3>
@endsection