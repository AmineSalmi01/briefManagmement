<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class GestionTask extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('AddTasks', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert_Task = new Task();
        $insert_Task->Name_task = $request->input('nameTasks');
        $insert_Task->startTask = $request->input('date_tasks');
        $insert_Task->endTask = $request->input('end_tasks');
        $insert_Task->brief_id = $request->input('brief_id');
        $insert_Task->save();
        return redirect('brief'.'/'.$request->input('brief_id').'/edit');
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
        $Task = Task::where('id',$id)->first();
        return view('editeTasks', compact('Task'));
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
        $edit_Task = Task::find($id);
        $edit_Task->name_task = $request->input('name_Task');
        $edit_Task->startTask = $request->input('start_Task');
        $edit_Task->endTask = $request->input('end_Task');
        $edit_Task->save();
        return redirect('brief'.'/'.$edit_Task->brief_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $delete_task = Task::where('id',$id)->first();
        $brief_id = $delete_task->brief_id;
        $delete_task->delete($id);
        return redirect('brief/' . $brief_id . '/edit');
    }
}
