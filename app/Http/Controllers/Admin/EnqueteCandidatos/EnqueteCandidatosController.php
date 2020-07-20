<?php

namespace App\Http\Controllers\Admin\EnqueteCandidatos;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\EnqueteCandidato;
use Illuminate\Http\Request;

class EnqueteCandidatosController extends Controller
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
            $enquetecandidatos = EnqueteCandidato::where('candidato_id', 'LIKE', "%$keyword%")
                ->orWhere('enquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $enquetecandidatos = EnqueteCandidato::latest()->paginate($perPage);
        }

        return view('admin.enquete-candidatos.index', compact('enquetecandidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.enquete-candidatos.create');
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
        
        EnqueteCandidato::create($requestData);

        return redirect('admin/enquete-candidatos')->with('flash_message', 'EnqueteCandidato added!');
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
        $enquetecandidato = EnqueteCandidato::findOrFail($id);

        return view('admin.enquete-candidatos.show', compact('enquetecandidato'));
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
        $enquetecandidato = EnqueteCandidato::findOrFail($id);

        return view('admin.enquete-candidatos.edit', compact('enquetecandidato'));
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
        
        $enquetecandidato = EnqueteCandidato::findOrFail($id);
        $enquetecandidato->update($requestData);

        return redirect('admin/enquete-candidatos')->with('flash_message', 'EnqueteCandidato updated!');
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
        EnqueteCandidato::destroy($id);

        return json_encode(1);
    }
}
