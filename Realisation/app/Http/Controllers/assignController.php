<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\ApprenantsBrief;
use App\Models\Brief;
use Illuminate\Http\Request;

class assignController extends Controller
{
    public function assign_view($id_brief){
        $data = Apprenant::all();
        return view('Assign', compact('data', 'id_brief'));
    }
    public function assign($id_brief, $id_apprenant){
        // $assign_data = new ApprenantsBrief();
        // $assign_data->id_brief = $id_brief;
        // $assign_data->id_apprenant = $id_apprenant;
        // $assign_data->save();    
        $brief = Brief::where('id', $id_brief)->first();
        $brief->apprenants()->attach($id_apprenant);
        return redirect(route('Assign_brief', ['id_brief'=>$id_brief]));
    }

    public function dettach($id_brief, $id_apprenant){
        $dettach = Brief::where('id', $id_brief)->first();
        $dettach->apprenants()->detach($id_apprenant);
        return redirect(route('Assign_brief', ['id_brief'=>$id_brief]));
    }
}
