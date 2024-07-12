<x-mail::message>
    # Mensagem de {{ $data['name'] }}


    E-mail: {{ $data['email'] }},
    Telefone: {{ $data['tel'] }},
    Mensagem:
    {{ $data['message'] }}



    {{ date('d/m/Y') }}
    {{ config('app.name') }}
</x-mail::message>
