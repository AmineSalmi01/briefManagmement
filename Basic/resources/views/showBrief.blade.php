@extends('layout')
@section('showBrief')
        
    

    @foreach ($select_brief as $brief)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $brief->Name_brief }}</h5>
            <p class="card-text">{{ $brief->startBrief }}</p>
            <p class="card-text">{{ $brief->endBrief }}</p>
            <a href="{{ route('brief.edit', $brief->id) }}" class="btn btn-primary">edite</a>
            <a href="#" class="btn btn-primary">delete</a>
            </div>
        </div>
    @endforeach
@endsection