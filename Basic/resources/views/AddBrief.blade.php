@extends('layout')
@section('addBrief')

    <form action="{{ route('brief.store') }}" method="POST">
        @csrf

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Add Brief</h5>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><input type="text" name="name_brief"></li>
        <li class="list-group-item"><input type="date" name="date_brief"></li>
        <li class="list-group-item"><input type="date" name="end_brief"></li>
        </ul>
        <div class="card-body">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
    </form>

@endsection

