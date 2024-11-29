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
                    {{ __('Tabela de Acessórios') }}
                </div>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="container mx-auto px-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route('acessorios.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Inserir acessório</a>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border border-slate-600 text-center">NOME</th>
                            <th class="border border-slate-600 text-center">MARCA</th>
                            <th class="border border-slate-600 text-center">PREÇO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($acessorios as $acessorio)
                        <tr>
                            <td class="border border-slate-700 text-center">{{ $acessorio->nome }}</td>
                            <td class="border border-slate-700 text-center">{{ $acessorio->marca }}</td>
                            <td class="border border-slate-700 text-center">{{ $acessorio->preço }}</td>
                            <td>
                                <form action="{{ route('acessorios.edit',['acessorio' => $acessorio->id]) }}" method="GET" class="border border-slate-700 text-center">
                                    @csrf
                                    <button type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('acessorios.destroy',['acessorio' => $acessorio->id]) }}" method="post" class="border border-slate-700 text-center">
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