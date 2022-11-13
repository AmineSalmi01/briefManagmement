@extends('layout')
@section('content')

    <form action="{{ route('brief.Tasks.store', $id) }}" method="POST">
        @csrf

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Add task</h5>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><input type="text" name="nameTasks"></li>
        <li class="list-group-item"><input type="date" name="date_tasks"></li>
        <li class="list-group-item"><input type="date" name="end_tasks"></li>
        <li class="list-group-item"><input type="hidden" name="brief_id" value="{{ $id }}"></li>
        </ul>
        <div class="card-body">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
    </form>

@endsection

