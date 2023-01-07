<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modalidade;

class ModalidadesBackController extends Controller
{
    public function index(){
        $modalidade = Modalidade::all();
        return view('admin.modalidades.modalidade',compact('modalidade'));
    }
    public function create(){
        return view('admin.modalidades.modalidade_create');
    }
    public function show(Modalidade $mod){
        return view('admin.modalidades.modalidade_show', ['modalidade' => $mod]);
    }
    public function edit(Modalidade $mod)
    {
        return view('admin.modalidades.modalidade_edit', ['modalidade' => $mod]); 
    }
    public function store(Request $request){
        $mod = Modalidade::create([
            //nome do input=> função request -> nome do campo na bd
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
        ]);
        return redirect()->route('/admin/modalidades')->with('success', true);
    }
    public function update(Request $request, Modalidade $mod)
    {
        $mod->update([
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
        ]);

        return redirect()->route('admin.modalidades.modalidade_edit', ['modalidade' => $mod]);
    }
}