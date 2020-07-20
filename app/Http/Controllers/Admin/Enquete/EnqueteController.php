<?php

namespace App\Http\Controllers\Admin\Enquete;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Candidato;
use App\Models\Enquete;
use App\Models\EnqueteCandidato;
use Illuminate\Http\Request;

class EnqueteController extends Controller
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
            $enquete = Enquete::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $enquete = Enquete::latest()->paginate($perPage);
        }

        return view('admin.enquete.index', compact('enquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $candidatos = Candidato::all();
        return view('admin.enquete.create', compact('candidatos'));
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
        
        $requestData = $request->except('candidato_id');
        
        $enquete = Enquete::create($requestData);

        foreach ($request->candidato_id as $key => $value) {
            EnqueteCandidato::create([
                'enquete_id' => $enquete->id,
                'candidato_id' => $value,
            ]);
        }

        return redirect('admin/enquete')->with('flash_message', 'Enquete added!');
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
        $enquete = Enquete::findOrFail($id);

        return view('admin.enquete.show', compact('enquete'));
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
        $enquete = Enquete::findOrFail($id);

        return view('admin.enquete.edit', compact('enquete'));
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
        
        $enquete = Enquete::findOrFail($id);
        $enquete->update($requestData);

        return redirect('admin/enquete')->with('flash_message', 'Enquete updated!');
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
        Enquete::destroy($id);

        return json_encode(1);
    }
}
