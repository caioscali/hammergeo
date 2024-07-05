@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    @include('partials.banner-slide')

    <div class="container">
        <section class="grid grid-cols-1 gap-6 md:grid-cols-1 lg:grid-cols-2 mt-20 p-5 bg-no-repeat w-full justify-between"
            style=" background-image: url('images/img/fundo-quem-somos.png')">

            <div class="flex w-full flex-col p-5 items-start justify-center text-zinc-700">
                <p class="font-bold mt-1 mb-2 px-2">QUEM SOMOS</p>
                <div class="w-full h-px bg-slate-200 my-2"></div>
                <div class="flex flex-col px-2">
                    <span class=" mb-6 text-justify">
                        A Hammergeo, á mais de 10 anos no mercado de fundações profundas,
                        já executou obra em todas as regiões do Brasil e até mesmo em
                        países vizinhos. Ao longo desses anos e com a grande diversidade
                        de solos e fundações encontrada ao longo do extenso território
                        brasileiro, hoje possuímos solido conhecimento no que fazemos
                        dessa forma oferendo aos nossos clientes segurança e
                        confiabilidade em uma etapa tão importante e complexa que são as
                        fundações.
                    </span>
                </div>
            </div>
            <div>
                <img class="rounded-lg " src='images/img/quem-somos.jpg' alt="Quem somos!" />
            </div>
        </section>
    </div>
    <div class="parallax-container mt-10 ">
        <div class="parallax">
            <img src="{{ asset('images/banner/banner-1.jpg') }}" alt="[imagem]" title="Hammergeo" class="responsive-img">
        </div>
    </div>
    <div class=" bg-white py-10">
        <p class="font-bold flex w-full text-3xl justify-center items-center">Clientes</p>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        @include('partials.banner-clientes')
    </div>

@endsection
