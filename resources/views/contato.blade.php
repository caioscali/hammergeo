@extends('layouts.layout')
@section('title', 'Hammergeo')
@section('content')

    <div class="container">
        <h1 class="font-bold flex w-full text-3xl justify-center items-center mt-28">Entre em Contato</h1>
        <div class="w-full h-px bg-slate-200 my-2"></div>
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2">

            <div class="grid grid-cols-1 justify-center items-center">
                <p>
                    <strong>Atendimento: </strong><br>
                    Seg à Sex 08:00 às 18:00<br>
                    Sáb 08:00 às 12:00<br><br>

                    <strong>Telefone:</strong>
                    <a class=" text-black" href="https://api.whatsapp.com/send?phone=5518998104664" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i> (18) 99810 4664
                    </a><br>
                    <strong> E-mail: </strong> contato@hammergeo.com.br<br><br>

                    <strong> Endereço: </strong>Rua Sebastião Leite do Canto, n° 123<br>
                    Centro, Assis/SP<br>
                    <strong>CEP: </strong> 19.814-300<br>
                </p>
            </div>
            <div class="grid grid-cols-1">
                <form action="{{ route('novocontato') }}" method="post">
                    @csrf
                    <div class="row">
                        {{-- campo nome --}}
                        <div class="grid grid-cols-1 m4 input-field">
                            <i class="fa-solid fa-user prefix"></i>
                            <input type="text" name="name" id="name" required>
                            <label for="name">Seu Nome</label>
                        </div>
                        {{-- campo telefone --}}
                        <div class="grid grid-cols-1 m4 input-field">
                            <i class="material-icons prefix">phone_iphone</i>
                            <input type="tel" name="tel" id="tel" required>
                            <label for="tel">Digite seu telefone</label>
                        </div>
                        {{-- campo email --}}
                        <div class="grid grid-cols-1 m4 input-field">
                            <i class="fa-regular fa-envelope prefix"></i>
                            <input type="email" name="email" id="email" required>
                            <label for="name">Seu E-mail</label>
                        </div>
                        {{-- campo nome --}}
                        <div class="input-field grid grid-cols-1 ">
                            <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                            <label for="textarea1">Sua Mensagem</label>
                        </div>

                        {{--  botoes --}}
                        <div class="col s12 input-field">

                            <button type="submit" class="btn btn-small grey darken-3 grey-text text-lighten-5 "><i
                                    class="fa-regular fa-paper-plane left"></i>enviar</button>
                            <button type="reset" class="btn btn-small grey lighten-5 grey-text text-darken-3"><i
                                    class="fa-solid fa-eraser left"></i>limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>
    <div class="w-full h-px bg-slate-200 my-5"></div>
    <div class="grid grid-cols-1">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.8521032949961!2d-50.41876912713884!3d-22.662157993705247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9495399b71b7940d%3A0x9e8f3357fb459ed8!2sR.%20Sebasti%C3%A3o%20Leite%20Do%20Canto%2C%20123%20-%20San%20Fernando%20Valley%2C%20Assis%20-%20SP%2C%2019800-120!5e0!3m2!1spt-BR!2sbr!4v1720453964660!5m2!1spt-BR!2sbr"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
