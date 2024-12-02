<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public readonly Marca $marca;

    public function __construct()
    {
        $this->marca = new Marca();
    }

    public function index()
    {
        $marcas = $this->marca->all();
        return view('marcas', ['marcas' => $marcas]);
    }

    public function create()
    {
        return view('marca_create');
    }


    public function store(Request $request)
    {
        $created = $this->marca->create([
            'nome' => $request->input('nome'),
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Marca inserida!');
        }

        return redirect()->back()->with('message', 'Falha na inserção!');
    }

    public function edit(Marca $marca)
    {
        return view('marca_edit', ['marca' => $marca]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->marca->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'marca editado!');
        }

        return redirect()->back()->with('message', 'Falha na edição!');
    }

    public function destroy(string $id)
    {
        $this->marca->where('id', $id)->delete();

        return redirect()->route('marcas.index');
    }
}
