@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    <div class="container">
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-28">{{ $servico->titulo }}</h1>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <div>
            <img class="images-responsive rounded-lg mb-2 transition-all" src='{{ asset($servico->image) }}' alt="Hammergeo" />
        </div>
        <p class="w-full font-bold mt-1 mb-2 px-2 py-1"></p>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <div class="flex flex-col px-2">
            <span class=" mb-6 text-justify">
                {{ $servico->descricao }}
            </span>
        </div>
    </div>
@endsection
