<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hammer-ON</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            <div class="container mx-auto px-4">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Tabela de Instrumentos') }}
                </div>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="container mx-auto px-4">
                <ul class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    @foreach ($instrumentos as $instrumento)
                    <li>{{ $instrumento->nome }}|{{ $instrumento->modelo }}|{{ $instrumento->marca }}|{{ $instrumento->tipo }}|{{ $instrumento->preço }} | <a href="{{ route('instrumentos.edit', ['instrumento' => $instrumento->id]) }}">Editar</a> | <a href="">Deletar</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </x-slot>
    </x-app-layout>

</body>

</html>