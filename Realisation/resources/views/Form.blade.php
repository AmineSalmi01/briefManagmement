@extends('layout')
@section('content')
    
    <form method="POST" action="{{ route('Promotion.store') }}">
        
        @csrf
        <input type="text" name="input">
        <button type="submit" class="btn btn-success">Add Promotion</button>
    </form>
        
@endsection


    
    
