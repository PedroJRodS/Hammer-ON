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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
