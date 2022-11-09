<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class GestionBrief extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $select_brief = Brief::all();
        return view('showBrief', compact('select_brief'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AddBrief');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert_brief = new Brief();
        $insert_brief->Name_brief = $request->input('name_brief');
        $insert_brief->startBrief = $request->input('date_brief');
        $insert_brief->endBrief = $request->input('end_brief');
        $insert_brief->save();
        return redirect()->route('brief.index');
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
        $brief = Brief::where('id',$id)->first();
        $tasks = $brief->Task;
        return view('editeBrief', compact('brief', 'tasks'));
        // return $tasks;

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
        $edit_brief = Brief::find($id);
        $edit_brief->Name_brief = $request->input('name_brief');
        $edit_brief->startBrief = $request->input('date_brief');
        $edit_brief->endBrief = $request->input('end_brief');
        $edit_brief->save();
        return redirect()->route('brief.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
