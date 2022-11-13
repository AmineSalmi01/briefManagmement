<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class apprenants_controller extends Controller
{
    public function form_apprenants($id){
        $id_promotion = $id;
        // return view('edit', compact('id_promotion'));
        return redirect(route('Form_appr', ['id'=>$id_promotion]));
    }

    public function Add_apprenants(Request $request){
        
        $add_apprenants = new Apprenant();
        $add_apprenants->prenom = $request->prenom;
        $add_apprenants->nom = $request->nom;
        $add_apprenants->email = $request->email;
        $add_apprenants->id_promotion = $request->id_promotion;
        $add_apprenants->save();
        return redirect("Promotion/$add_apprenants->id_promotion/edit");
        
    }

    public function edit_apprenants(Request $request, $id){
        
        $update = Apprenant::where('id',$id)->first();
        $update->prenom = $request->prenom;
        $update->nom = $request->nom;
        $update->email = $request->email;
        $update->save();
        return redirect('Promotion/'.$update->id_promotion.'/edit');
    }
    
    public function edit_form($id){
        $data = Apprenant::where('id',$id)->first();
        return view('edit_form', compact('data'));
        // return $data->id;
    }

    public function delete_appr($id_apprenants)
    {
        $data = Apprenant::where('id', $id_apprenants)->get();
        $id_promo = $data[0]->id_promotion;
        $data[0]->delete();
        return redirect("/Promotion/$id_promo/edit");
    }
}
