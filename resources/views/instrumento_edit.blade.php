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
                    {{ __('Editar Instrumento') }}
                </div>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="container mx-auto px-4">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    <form action="{{ route('instrumentos.update',['instrumento' => $instrumento->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="text" name="nome" value="{{ $instrumento->nome }}">
                        {{ $errors->first('nome') }}
                        <input type="text" name="modelo" value="{{ $instrumento->modelo }}">
                        {{ $errors->first('modelo') }}
                        <input type="text" name="marca" value="{{ $instrumento->marca }}">
                        {{ $errors->first('marca') }}
                        <input type="text" name="tipo" value="{{ $instrumento->tipo }}">
                        {{ $errors->first('tipo') }}
                        <input type="number" name="preço" value="{{ $instrumento->preço }}">
                        {{ $errors->first('preço') }}
                        <button type="submit" class="dark:text-gray-200 leading-tight border border-slate-700">Editar</button>
                    </form>
                </div>
                <a href="{{ route('instrumentos.index') }}" class="dark:text-gray-200 leading-tight border border-slate-700">Voltar</a>
            </div>
        </x-slot>
    </x-app-layout>
</body>

</html>