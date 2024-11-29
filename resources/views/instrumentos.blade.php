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
            <div class="container mx-auto px-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route('instrumentos.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Inserir instrumento</a>
                <table class="w-full">
                    <thead class="sticky">
                        <tr>
                            <th class="border border-slate-600 text-center">NOME</th>
                            <th class="border border-slate-600 text-center">MODELO</th>
                            <th class="border border-slate-600 text-center">MARCA</th>
                            <th class="border border-slate-600 text-center">TIPO</th>
                            <th class="border border-slate-600 text-center">PREÇO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instrumentos as $instrumento)
                        <tr>
                            <td class="border border-slate-700 text-center">{{ $instrumento->nome }}</td>
                            <td class="border border-slate-700 text-center"> {{ $instrumento->modelo }}</td>
                            <td class="border border-slate-700 text-center">{{ $instrumento->marca }}</td>
                            <td class="border border-slate-700 text-center">{{ $instrumento->tipo }}</td>
                            <td class="border border-slate-700 text-center">{{ $instrumento->preço }}</td>
                            <td>
                                <form action="{{ route('instrumentos.edit',['instrumento' => $instrumento->id]) }}" method="GET" class="border border-slate-700 text-center">
                                    @csrf
                                    <button type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('instrumentos.destroy',['instrumento' => $instrumento->id]) }}" method="post" class="border border-slate-700 text-center">
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