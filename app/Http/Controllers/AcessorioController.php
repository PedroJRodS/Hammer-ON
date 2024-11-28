<?php

namespace App\Http\Controllers;

use App\Models\Acessorio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcessorioController extends Controller
{
    public readonly Acessorio $acessorio;

    public function __construct()
    {
        $this->acessorio = new Acessorio();
    }

    public function index()
    {
        $acessorios = $this->acessorio->all();
        return view('acessorios', ['acessorios' => $acessorios]);
    }

    public function create()
    {
        return view('acessorio_create');
    }

    public function store(Request $request)
    {
        $created = $this->acessorio->create([
            'nome' => $request->input('nome'),
            'marca' => $request->input('marca'),
            'preço' => $request->input('preço'),
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Acessório inserido!');
        }

        return redirect()->back()->with('message', 'Falha na inserção!');
    }

    public function edit(Acessorio $acessorio)
    {
        return view('acessorio_edit', ['acessorio' => $acessorio]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->acessorio->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Acessório editado!');
        }

        return redirect()->back()->with('message', 'Falha na edição!');
    }
    public function destroy(string $id)
    {
        $this->acessorio->where('id', $id)->delete();

        return redirect()->route('acessorios.index');
    }
}
