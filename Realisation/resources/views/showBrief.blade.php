@extends('layout')
@section('content')
        
    
    <a href="{{ route('brief.create') }}" class="btn btn-success" id="btn_addBrief">add Brief</a>

    <div class="row m-10 " id="apparent">
        @foreach ($select_brief as $brief)
            <div class="col-4 card m-5" style="width: 18rem;" id="brief_content">
                <div class="card-body">
                <h5 class="card-title">{{ $brief->Name_brief }}</h5>
                <p class="card-text">{{ $brief->startBrief }}</p>
                <p class="card-text">{{ $brief->endBrief }}</p>
                <a href="{{ route('brief.edit', $brief->id) }}" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">delete</a>
                <a href="{{ route('Assign_brief',['id_brief'=>$brief->id]) }}" class="btn btn-primary">Assign</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection