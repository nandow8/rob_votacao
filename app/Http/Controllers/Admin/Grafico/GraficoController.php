<?php

namespace App\Http\Controllers\Admin\Grafico;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Enquete;
use App\Models\Grafico;
use App\Models\Votacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $enquetes = Enquete::withTrashed()->get();

        return view('admin.grafico.index', compact('enquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.grafico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function resultados(Request $request)
    {
        $enqueteID = $request->enquetes;

        $tituloEnquete = Enquete::where('id', $enqueteID)->withTrashed()->first();
        
        $tipoEnquete = Votacao::where('enquete_id', $enqueteID)->first()['multiplos'];

        if($tipoEnquete != null) {
            $resultados = DB::select("SELECT 
                    candidatos.nome, count(candidatos.nome) as qtd ,
                    (
                    select 
                        GROUP_CONCAT(users.name)
                    from votacaos 
                    join
                        users on users.id = votacaos.user_id 
                    WHERE 
                        votacaos.enquete_id = $enqueteID
                ) as votantes,
                (
                    select 
                        COUNT(users.name)
                    from votacaos 
                    join
                        users on users.id = votacaos.user_id 
                    WHERE 
                        votacaos.enquete_id = $enqueteID
                )as totalVotantes
                from votacaos 
                JOIN 
                    candidatos ON candidatos.id = votacaos.candidato_id 
                WHERE
                    votacaos.enquete_id = $enqueteID
                GROUP BY
                    candidatos.nome");
            
            return view('admin.grafico.show', compact('resultados', 'tituloEnquete'));
        } else {
            $resultados = DB::select("SELECT 
                 votacaos.voto as nome, count(votacaos.voto) as qtd, candidatos.nome as candidatos,
                 (
                    select 
                        GROUP_CONCAT(users.name)
                    from votacaos 
                    join
                        users on users.id = votacaos.user_id 
                    WHERE 
                        votacaos.enquete_id = $enqueteID
                ) as votantes,
                (
                    select 
                        COUNT(users.name)
                    from votacaos 
                    join
                        users on users.id = votacaos.user_id 
                    WHERE 
                        votacaos.enquete_id = $enqueteID
                )as totalVotantes     
            FROM 	
                votacaos 
            JOIN 
                candidatos ON candidatos.id = votacaos.candidato_id
            WHERE 	
                votacaos.multiplos is null
                AND votacaos.enquete_id = $enqueteID
            GROUP BY
                votacaos.voto");

            return view('admin.grafico.show', compact('resultados', 'tituloEnquete'));
        }
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
        $grafico = Grafico::findOrFail($id);

        return view('admin.grafico.show', compact('grafico'));
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
        $grafico = Grafico::findOrFail($id);

        return view('admin.grafico.edit', compact('grafico'));
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
        
        $grafico = Grafico::findOrFail($id);
        $grafico->update($requestData);

        return redirect('admin/grafico')->with('flash_message', 'Grafico updated!');
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
        Grafico::destroy($id);

        return json_encode(1);
    }
}
