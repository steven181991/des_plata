<?php

namespace App\Http\Controllers;

use App\Models\mov_docs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovDocsController extends Controller
{
    public function add_movpend(Request $request){
        $mov_doc = new mov_docs();
        $mov_doc->id_cabdoc = $request->id_cabdoc;
        $mov_doc->nombre = $request->nombre;
        $mov_doc->cantidad = $request->cantidad;
        $mov_doc->save();
          
        return response()->json($mov_doc, 201);
    } 

    public function lst_mov_docs(string $id){        
        $listado_mov = mov_docs::where('id_cabdoc', $id)->get();

        return response()->json($listado_mov, 200);
    }


    public function chk_mov_docs(Request $request,string $id){
        $mov_docs = mov_docs::find($id);
        $mov_docs->estado = $request->estado;
        $mov_docs->save();

        
        return response()->json($mov_docs, 200);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storemov_docsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mov_docs $mov_docs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mov_docs $mov_docs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemov_docsRequest $request, mov_docs $mov_docs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mov_docs $mov_docs)
    {
        //
    }
}
