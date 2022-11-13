<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\list_Promotion;
use Illuminate\Http\Request;

class Promotion_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = list_Promotion::all();
        return view('index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = new list_Promotion();
        $promotion->name = $request->input('input');
        $promotion->save();
        return redirect()->route('Promotion.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Apprenant::select('email', 'prenom', 'nom', 'name', 'list__promotions.id as id_promo', 'apprenants.id')
        ->RightJoin('list__promotions', 'list__promotions.id', '=', 'apprenants.id_promotion')
        ->where('list__promotions.id', '=', $id)
        ->get();
        // return $data;
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_promotion = list_Promotion::find($id);
        $update_promotion->name = $request->input('update_input');
        $update_promotion->save();
        return redirect('Promotion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        list_Promotion::destroy($id);
        return redirect('Promotion');
    }

    public function search($name = NULL){

        if($name == NULL){
            $promotion = list_Promotion::all();
            return view('search_page',compact('promotion'));
        }

        else{
            $promotion = list_Promotion::where('name', 'like','%'.$name.'%')->get();
            return view('search_page', compact('promotion'));
        }
    }

}
