<footer class="shadow bg-primary mt-4 p-10 text-secondary">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <p class="flow-text">Hammergeo</p>
                <p>
                    Rua Sebastião Leite do Canto, n° 123
                </p>
                <p>
                    Centro, Assis/SP
                </p>
                <p>
                    CEP: 19.814-300
                </p>
            </div>

            <div class="col s12 m6 l4 push-l2">
                <ul>
                    <li><a href="{{ route('home') }}" class="text-secondary">Home</a></li>
                    <li><a href="{{ route('servicos.index') }}" class="text-secondary">Serviços</a></li>
                    <li><a href="{{ route('obras.index') }}" class="text-secondary">Obras</a></li>
                    <li><a href="{{ route('contato') }}" class="text-secondary">Contato</a></li>
                </ul>
            </div>

        </div>
    </div>
    <hr class="my-6 border-secondary sm:mx-autolg:my-8 " />
    <div class="flex justify-between container">
        <span class="block text-sm text-secondary sm:text-center">© {{ Date('Y') }}
            <a class="text-secondary" href="{{ route('home') }}" class="hover:underline">HAMMERGEO</a>
            . Todos os direitos reservados.</span>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            <strong>Desenvolvido por <a class="text-secondary" href="https://scali.dev">Scali.dev</a></strong>
        </span>
    </div>
</footer>
