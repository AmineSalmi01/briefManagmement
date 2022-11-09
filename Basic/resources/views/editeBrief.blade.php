
@extends('layout')
@section('editeBrief')

    <form action="{{ route('brief.update', $brief->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name_brief" value="{{  $brief->Name_brief }}">
        <input type="date" name="date_brief" value="{{  $brief->startBrief }}">
        <input type="date" name="end_brief" value="{{  $brief->endBrief }}">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
        <button><a href="">Add Tasks</a></button>

        @foreach ($tasks as $task)
            <h3>{{ $task->name_task }}</h3>
            <h3>{{ $task->startTask }}</h3>
            <h3>{{ $task->endTask }}</h3>
        @endforeach
@endsection


