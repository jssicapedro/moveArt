<?php

namespace App\Http\Controllers;

use App\Models\Patrocinio;
use Illuminate\Http\Request;

class PatrocinioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrocinios = Patrocinio::all();
        return view('admin.patrocinios.patrocinio', compact('patrocinios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patrocinio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'valor' => 'required',
        ]);

        Patrocinio::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ]);

        return view('patrocinio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinio $patrocinio)
    {
        return view('admin.patrocinios.patrocinio_show', ['patrocinio' => $patrocinio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrocinio $patrocinio)
    {
        return view('admin.patrocinios.patrocinio_edit', ['patrocinio' => $patrocinio]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Patrocinio $patrocinio)
    {
        $patrocinio->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
            'resposta' => $request->resposta,
            'estado' => $request->estado,
        ]);

        return "patrocinio atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrocinio $patrocinio)
    {
        //
    }
}
