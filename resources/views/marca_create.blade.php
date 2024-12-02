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
                    {{ __('Inserir Marca') }}
                </div>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="container mx-auto px-4">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

                    @if (session()->has('message'))
                    {{ session()->get('message') }}
                    @endif

                    <form action="{{ route('marcas.store') }}" method="post">
                        @csrf
                        <input type="text" name="nome" placeholder="Nome da marca">
                        <button type="submit" class="dark:text-gray-200 leading-tight border border-slate-700">Inserir</button>
                    </form>
                </div>
                <a href="{{ route('marcas.index') }}" class="dark:text-gray-200 leading-tight border border-slate-700">Voltar</a>
            </div>
        </x-slot>
    </x-app-layout>
</body>

</html>