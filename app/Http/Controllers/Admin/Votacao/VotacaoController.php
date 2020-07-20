<?php

namespace App\Http\Controllers\Admin\Votacao;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Candidato;
use App\Models\Enquete;
use App\Models\Votacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    // public function index(Request $request)
    // {
    //     $keyword = $request->get('search');
    //     $perPage = 25;

    //     if (!empty($keyword)) {
    //         $votacao = Votacao::where('user_id', 'LIKE', "%$keyword%")
    //             ->orWhere('candidato_id', 'LIKE', "%$keyword%")
    //             ->orWhere('enquete_id', 'LIKE', "%$keyword%")
    //             ->latest()->paginate($perPage);
    //     } else {
    //         $votacao = Votacao::latest()->paginate($perPage);
    //     }

    //     return view('admin.votacao.index', compact('votacao'));
    // }

    public function index() { 
        $enquetes = Enquete::select(
            'candidatos.id as candidato_id',
            'candidatos.nome',
            'candidatos.descricao as candidatos_descricao',
            'enquetes.id as enquete_id',
            'enquetes.titulo',
            'enquetes.descricao as enquete_descricao',
        )
        ->join('enquete_candidatos', 'enquete_candidatos.enquete_id', 'enquetes.id')
        ->join('candidatos', 'candidatos.id', 'enquete_candidatos.candidato_id')
        ->get();

        if(Votacao::where('user_id', Auth::user()->id)->where('enquete_id', $enquetes[0]->enquete_id)->first()){
            return view('admin.votacao.javotou', compact('enquetes'));
        }
        
        if (COUNT($enquetes) > 1) {
            return view('admin.votacao.index', compact('enquetes'));
        } else {
            return view('admin.votacao.unicoindex', compact('enquetes'));
        }
    }

    public function sim(Request $request){
        Votacao::create([
            'user_id' => Auth::user()->id,
            'enquete_id' => $request->enquete_id,
            'candidato_id' => $request->candidato_id,
            'voto' => 'sim'
        ]);

        return back()->with('success','Voto computado com sucesso!');
    }

    public function nao(Request $request){
        Votacao::create([
            'user_id' => Auth::user()->id,
            'enquete_id' => $request->enquete_id,
            'candidato_id' => $request->candidato_id,
            'voto' => 'nao'
        ]);

        return back()->with('success','Voto computado com sucesso!');
    }

    public function abstencao(Request $request){
        Votacao::create([
            'user_id' => Auth::user()->id,
            'enquete_id' => $request->enquete_id,
            'candidato_id' => $request->candidato_id,
            'voto' => 'abstencao'
        ]);

        return back()->with('success','Voto computado com sucesso!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.votacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Votacao::create($requestData);

        return redirect('admin/votacao')->with('flash_message', 'Votacao added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $votacao = Votacao::findOrFail($id);

        return view('admin.votacao.show', compact('votacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $votacao = Votacao::findOrFail($id);

        return view('admin.votacao.edit', compact('votacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $votacao = Votacao::findOrFail($id);
        $votacao->update($requestData);

        return redirect('admin/votacao')->with('flash_message', 'Votacao updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Votacao::destroy($id);

        return json_encode(1);
    }
}
