<?php

namespace App\Http\Controllers;

use App\Models\rel_user_cabd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelUserCabdController extends Controller
{
    public function lst_cab_docs(string $id_user){

        $result = rel_user_cabd::where('id_usuario', $id_user)
                ->join('cab_docs', 'rel_user_cabds.id_cabdoc', '=', 'cab_docs.id')
                ->select('cab_docs.id', 'cab_docs.nombre', 'cab_docs.fecha', 'cab_docs.estado', 'cab_docs.num_listo', 'cab_docs.num_pendiente')
                ->get();
        
        return response()->json($result, 200);
    }
}
