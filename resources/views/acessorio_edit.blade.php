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
        <x-slot name="body">
            <div class="container mx-auto px-4">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

                    @if (session()->has('message'))
                    {{ session()->get('message') }}
                    @endif

                    <form action="{{ route('acessorios.update',['acessorio' => $acessorio->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="text" name="nome" value="{{ $acessorio->nome }}">
                        <input type="text" name="marca" value="{{ $acessorio->marca }}">
                        <input type="number" name="preço" value="{{ $acessorio->preço }}">
                        <button type="submit">Editar</button>
                    </form>
                </div>
            </div>
        </x-slot>
    </x-app-layout>
</body>

</html>