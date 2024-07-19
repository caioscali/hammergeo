@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    <div class="container">
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-28">Serviços</h1>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <section class="grid grid-cols-1 gap-6 md:grid-cols-3 p-5 bg-no-repeat w-full justify-between">
            @foreach ($servicos as $servico)
                <div class="flex w-full flex-col p-4 items-start justify-center text-zinc-700">
                    <div>
                        <img class="images-responsive rounded-lg mb-2 transition-all" src='{{ asset($servico->image) }}'
                            alt="Hammergeo" />
                    </div>
                    <p class="w-full font-bold mt-1 mb-2 px-2 py-1">{{ $servico->titulo }}</p>
                    <div class="w-full h-px bg-slate-200 my-2"></div>
                    <div class="flex flex-col px-2">
                        <span class=" mb-6 text-justify">
                            {{ substr($servico->descricao, 0, 100) }}...
                        </span>
                    </div>
                    <p class="paragrafo"><a href="{{ route('servicos.show', $servico->id) }}"
                            class="btn btn-small indigo">saiba mais</a></p>
                </div>
            @endforeach
        </section>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-4">Locações</h1>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <section class="grid grid-cols-1 gap-6 md:grid-cols-3 p-5 bg-no-repeat w-full justify-between">
            @foreach ($locacoes as $locacao)
                <div class="flex w-full flex-col p-4 items-start justify-center text-zinc-700">
                    <div>
                        <img class="images-responsive rounded-lg mb-2 transition-all" src='{{ asset($locacao->image) }}'
                            alt="Hammergeo" />
                    </div>
                    <p class="w-full font-bold mt-1 mb-2 px-2 py-1">{{ $locacao->titulo }}</p>
                    <div class="w-full h-px bg-slate-200 my-2"></div>
                    <div class="flex flex-col px-2">
                        <span class=" mb-6 text-justify">
                            {{ $locacao->descricao }}
                        </span>
                    </div>
                    <p class="paragrafo"><a href="https://api.whatsapp.com/send?phone=5518998104664" target="_blank"
                            class="btn btn-small indigo">saiba
                            mais</a></p>
                </div>
            @endforeach
        </section>
    </div>
@endsection
