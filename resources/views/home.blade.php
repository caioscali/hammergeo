@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    @include('partials.banner-slide')
    <div class=" bg-white mt-28">

        <div class="container ">
            <section
                class="grid grid-cols-1 gap-6 md:grid-cols-1 lg:grid-cols-2 mt-20 p-5 bg-no-repeat w-full justify-between items-center"
                style=" background-image: url('{{ asset('images/img/fundo-quem-somos.png') }}')">

                <div class="flex w-full flex-col p-5 items-center justify-center text-zinc-700">
                    <p class="font-bold mt-1 mb-2 px-2">QUEM SOMOS</p>
                    <div class="w-full h-px bg-slate-200 my-2"></div>
                    <div class="flex flex-col px-2">
                        <span class=" mb-6 text-justify">
                            HAMMERGEO ENGENHARIA DE FUNDAÇÕES LTDA está sediada
                            na cidade de Assis - SP, atendendo obras em todo o território nacional nas atividades que cercam
                            a execução de todas as modalidades construtivas de estacas:
                            <br><br>▶ Sondagem SPT
                            <br>▶ Sondagem Rotativa
                            <br>▶ Sondagem DPL
                            <br>▶ Teste de Resistividade
                            <br>▶ Granulometria
                            <br>▶ Peso e Umidade Específica do Solo
                        </span>
                    </div>
                </div>
                <div>
                    <img class="w-full rounded-lg mb-2 hover:scale-105 transition-all "
                        src='{{ asset('images/img/quem-somos.png') }}' alt="Quem somos!" />
                </div>
            </section>
        </div>
    </div>
    @if ($obras == '')
        <div class="container ">


            <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-8">Obras</h1>
            <div class="w-full h-px bg-slate-200 my-2"></div>
            <div class="swiperObras items-center justify-center">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    @foreach ($obras as $obra)
                        <div class="swiper-slide ">
                            <a href="{{ route('obras.show', $obra->id) }}" class="">
                                <div class="flex w-full flex-col p-4 justify-center items-center text-zinc-700">
                                    <p class=" font-bold mt-1 mb-5 px-2 py-1">{{ $obra->titulo }}</p>
                                    <div class="w-full h-px bg-slate-200 my-2"></div>
                                    <div>
                                        <img class="w-full rounded-lg mb-2 h-36 max-w-52 hover:scale-105 transition-all"
                                            src='{{ asset($obra->images) }}' alt="Hammergeo" />
                                    </div>
                                    <div class="flex flex-col px-2">
                                        <span class=" mb-6 text-justify">
                                            {{ $obra->servico }}
                                        </span>
                                    </div>
                                    <p class="paragrafo btn btn-small indigo">saiba
                                        mais</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    @endif
    <div class=" bg-white py-10">
        <p class="font-bold flex w-full text-3xl justify-center items-center">Clientes</p>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        @include('partials.banner-clientes')
    </div>

@endsection
