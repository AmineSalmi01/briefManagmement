@extends('layout')
@section('content')

    <form action="{{ route('Tasks.update', $Task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name_Task" value="{{  $Task->name_task }}">
        <input type="date" name="start_Task" value="{{  $Task->startTask }}">
        <input type="date" name="end_Task" value="{{  $Task->endTask }}">
        <input type="hidden" name="id_Task" value="{{  $Task->id }}">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection