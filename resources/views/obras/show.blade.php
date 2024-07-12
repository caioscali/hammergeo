@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    <div class="container">
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-28">{{ $obra->titulo }}</h1>
        <p class="w-full font-bold mt-1 mb-2 px-2 py-1"></p>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <div class="flex flex-col px-2">
            @if ($obra->descricao)
                <span class=" mb-6 text-justify">
                    {{ $obra->descricao }}
                </span>
            @endif
            <span class=" mb-6 text-justify">
                {{ $obra->servico }}
            </span>
            @if ($obra->cliente)
                <span class=" mb-6 text-justify">
                    Cliente: {{ $obra->cliente }}
                </span>
            @endif
        </div>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 p-5 bg-no-repeat w-full justify-between">
            <img class="w-full rounded-lg mb-2 max-h-72 hover:scale-105 transition-all" src='{{ asset($obra->images) }}'
                alt="Hammergeo" />
        </div>
    </div>
@endsection
