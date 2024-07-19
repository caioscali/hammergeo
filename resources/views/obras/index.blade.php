@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    <div class="container">
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-28">Obras</h1>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <section class="grid grid-cols-1 gap-6 md:grid-cols-3 p-5 bg-no-repeat w-full justify-between">
            @foreach ($obras as $obra)
                <div class="flex w-full flex-col p-4 items-start justify-center text-zinc-700">
                    <p class="w-full font-bold mt-1 mb-2 px-2 py-1">{{ $obra->titulo }}</p>
                    <div class="w-full h-px bg-slate-200 my-2"></div>
                    <div>
                        <img class="w-full rounded-lg mb-2 max-h-52 hover:scale-105 transition-all"
                            src='{{ asset($obra->images) }}' alt="Hammergeo" />
                    </div>
                    <div class="flex flex-col px-2">
                        <span class=" mb-6 text-justify">
                            {{ $obra->servico }}
                        </span>
                    </div>
                    <p class="paragrafo"><a href="{{ route('obras.show', $obra->id) }}" class="btn btn-small indigo">saiba
                            mais</a></p>
                </div>
            @endforeach
        </section>
        <div class="flex w-full flex-col p-4 items-center justify-center text-zinc-700">
            <p class="w-full font-bold mt-1 mb-2 px-2 py-1 text-3xl">Em contrução...</p>
            <div class="w-full h-px bg-slate-200 my-2"></div>
            <div>
                <img class="w-full rounded-lg mb-2 max-h-80 hover:scale-105 transition-all"
                    src='{{ asset('images/Em construção....png') }}' alt="Hammergeo" />
            </div>
        </div>
    </div>
@endsection
