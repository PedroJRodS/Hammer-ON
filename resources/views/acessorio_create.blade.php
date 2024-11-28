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

                    <form action="{{ route('acessorios.store') }}" method="post">
                        @csrf
                        <input type="text" name="nome" placeholder="Nome do Acessório">
                        <input type="text" name="marca" placeholder="Marca do Acessório">
                        <input type="number" name="preço" placeholder="Preço do Acessório">
                        <button type="submit">Inserir</button>
                    </form>
                </div>
            </div>
        </x-slot>
    </x-app-layout>
</body>

</html>