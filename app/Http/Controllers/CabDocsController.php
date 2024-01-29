<?php

namespace App\Http\Controllers;

use App\Models\cab_docs;
use App\Models\rel_user_cabd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabDocsController extends Controller
{
    public function index()
    {
        $listado_cab = cab_docs::all();
        return response()->json($listado_cab, 200);
    }


    public function reg_cab_docs(Request $request){
        $cab_doc = new cab_docs();
        $cab_doc->nombre = $request->nombre;
        $cab_doc->save();

        $rel_u_c = new rel_user_cabd();
        $rel_u_c->id_usuario = $request->id_user;
        $rel_u_c->id_cabdoc = $cab_doc->id;
        $rel_u_c->save();
        
        return response()->json($cab_doc, 201);
    }

    public function del_reg_cab_docs(string $id)
    {
        try {
            $cab_doc = cab_docs::where('id', $id)->firstOrFail()->delete();
            $rel_u_c = rel_user_cabd::where('id_cabdoc', $id)->firstOrFail()->delete();

            if ($rel_u_c > 0) {
                return response()->json(['message' => 'Eliminado correctamente'], 200);
            } else {
                return response()->json(['error' => 'No se encontraron registros para eliminar'], 404);
            }

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'No se encontró ningún registro con el ID proporcionado'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al intentar eliminar el registro'], 500);
        }
    }
   
}

