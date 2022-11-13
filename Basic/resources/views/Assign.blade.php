@extends('layout')
@section('content')
        
    

    @foreach ($data as $apprenant)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $apprenant->nom }} {{ $apprenant->prenom }}</h5>
            <p class="card-text">{{ $apprenant->email }}</p>
            <a href="{{ route('Attach_brief',['id_brief'=>$id_brief, 'id_apprenant'=>$apprenant->id]) }}" class="btn btn-primary">Attach</a>
            <a href="{{ route('detach_brief',['id_brief'=>$id_brief, 'id_apprenant'=>$apprenant->id]) }}" class="btn btn-primary">Detach</a>
            </div>
        </div>
    @endforeach
@endsection