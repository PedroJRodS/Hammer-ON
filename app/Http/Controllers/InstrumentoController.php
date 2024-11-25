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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrumento $instrumento)
    {
        return view('instrumento_edit', ['instrumento' => $instrumento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->instrumento->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Instrumento editado!');
        }

        return redirect()->back()->with('message', 'Falha na edição!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
