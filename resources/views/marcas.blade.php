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
                    {{ __('Tabela de Marcas') }}
                </div>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="container mx-auto px-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route('marcas.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Inserir marca</a>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border border-slate-600 text-center">NOME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                        <tr>
                            <td class="border border-slate-700 text-center">{{ $marca->nome }}</td>
                            <td>
                                <form action="{{ route('marcas.edit',['marca' => $marca->id]) }}" method="GET" class="border border-slate-700 text-center">
                                    @csrf
                                    <button type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('marcas.destroy',['marca' => $marca->id]) }}" method="post" class="border border-slate-700 text-center">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-slot>
    </x-app-layout>

</body>

</html>