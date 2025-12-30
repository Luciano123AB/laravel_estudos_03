@extends("layouts.main_layout")

@section("content")
    {{-- <div class="text-center">
        @foreach($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div> --}}

    {{-- Componentes e Slots --}}
    <div>
        <h4 class="text-info">Como funciona um Slot?</h4>
        <x-other-card>
            <h1 class="text-danger">Este é um slot!</h1>
        </x-other-card>
    </div>
@endsection