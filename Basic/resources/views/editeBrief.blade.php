@extends('layout')
@section('content')
    <form action="{{ route('brief.update', $brief->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name_brief" value="{{ $brief->Name_brief }}">
        <input type="date" name="date_brief" value="{{ $brief->startBrief }}">
        <input type="date" name="end_brief" value="{{ $brief->endBrief }}">
        <input type="hidden" name="id_brief" value="{{ $brief->id }}">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <a href="{{ route('brief.Tasks.create', $brief->id) }}"><button class="btn btn-success">Add Tasks</button></a>





    <table class="table">

        <thead>
            <tr>
                <th scope="col">Name Task</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Task</th>
                <th scope="col">Edite/Delete</th>
            </tr>
        </thead>
        @foreach ($tasks as $task)
            <tbody>
                <tr>
                    <td>{{ $task->name_task }}</td>
                    <td>{{ $task->startTask }}</td>
                    <td>{{ $task->endTask }}</td>
                    <td>
                        <a href="{{ route('Tasks.edit', $task->id) }}"><button class="btn btn-primary">edit</button></a>
                        <form action="{{ url('Tasks/' . $task->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>

                </tr>
            </tbody>
        @endforeach

    </table>
@endsection
