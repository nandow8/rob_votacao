<?php

namespace App\Http\Controllers\Admin\Candidato;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Candidato;
use App\User;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $candidato = Candidato::where('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $candidato = Candidato::latest()->paginate($perPage);
        }

        return view('admin.candidato.index', compact('candidato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = User::all();
        return view('admin.candidato.create', compact('user'));
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
        
        Candidato::create($requestData);

        return redirect('admin/candidato')->with('flash_message', 'Candidato added!');
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
        $candidato = Candidato::findOrFail($id);

        return view('admin.candidato.show', compact('candidato'));
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
        $candidato = Candidato::findOrFail($id);

        return view('admin.candidato.edit', compact('candidato'));
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
        
        $candidato = Candidato::findOrFail($id);
        $candidato->update($requestData);

        return redirect('admin/candidato')->with('flash_message', 'Candidato updated!');
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
        Candidato::destroy($id);

        return json_encode(1);
    }
}
