<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de Serviços') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>

                    @if (session('msg'))
                        <p class="bg-blue-500 p-2 rounded text-center text-white">{{ session('msg') }}</p>
                    @endif
                    {{-- <form action="{{ route('cliente.store') }}" method="post" enctype="multipart/form-data"> --}}
                    <form action="" method="post">
                        @csrf
                        <fieldset class="border-2 rounded p-6">
                            <legend>Preencha todos os campo</legend>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="bg-gray-700 p-4 rounded overflow-hidden mb-4">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="w-full rounded bg-gray-500"
                                    required autofocus>
                            </div>

                            <div class="bg-gray-700 p-4 rounded overflow-hidden mb-4">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" id="descricao" class="w-full rounded bg-gray-500"
                                    required>
                            </div>

                            <div class="bg-gray-700 p-4 rounded overflow-hidden mb-4">
                                <label for="image">Imagem</label>
                                <input type="file" name="image" id="image" class="w-full rounded bg-gray-500"
                                    accept="image/gif, image/jpeg, image/png" required>
                            </div>


                            <div class="bg-gray-700 p-4 rounded overflow-hidden">
                                <input type="submit" value="Cadastrar" class="bg-blue-500 text-white rounded p-2">
                                <input type="reset" value="Limpar" class="bg-red-500 text-white rounded p-2">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
