<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public readonly Instrumento $instrumento;

    public function __construct()
    {
        $this->instrumento = new Instrumento();
    }

    public function index()
    {
        $instrumentos = $this->instrumento->all();
        return view('instrumentos', ['instrumentos' => $instrumentos]);
    }

    public function create()
    {
        return view('instrumento_create');
    }


    public function store(Request $request)
    {
        $created = $this->instrumento->create([
            'nome' => $request->input('nome'),
            'modelo' => $request->input('modelo'),
            'marca' => $request->input('marca'),
            'tipo' => $request->input('tipo'),
            'preço' => $request->input('preço'),
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Instrumento inserido!');
        }

        return redirect()->back()->with('message', 'Falha na inserção!');
    }

    public function edit(Instrumento $instrumento)
    {
        return view('instrumento_edit', ['instrumento' => $instrumento]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->instrumento->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Instrumento editado!');
        }

        return redirect()->back()->with('message', 'Falha na edição!');
    }

    public function destroy(string $id)
    {
        $this->instrumento->where('id', $id)->delete();

        return redirect()->route('instrumentos.index');
    }
}
