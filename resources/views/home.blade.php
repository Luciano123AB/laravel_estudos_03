@extends("layouts.main_layout")

@section("content")
    <h3>Este texto faz parta da view.</h3>
    {{-- Renderizar o component: --}}
    <x-my-component message="Mensagem passada para dentro do componente." />

    {{-- Renderizar component que existe dentro de subpasta. --}}
    <x-admin.admin-card :name="$myName" teste="Olá Mundo!" />
    <h3>Este texto faz parte da view.</h3>

    <p>{{ $myName }}</p>
@endsection