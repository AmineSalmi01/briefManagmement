@extends('layout')
@section('content')

    <a href="{{ route('Promotion.create') }}" ><button class="btn btn-primary" class="btn_add_promotion">add Promotion</button></a>
    <input type="search" name="search" id="search" placeholder="search" class="searsh">
    <div id="content" >

        <table class="table">
            
            <thead>
                
              <tr>
                <th scope="col">id</th>
                <th scope="col">Promotion</th>
                <th scope="col">Edit / Delete</th>
                <th scope="col"></th>
              </tr>
            </thead>


            @foreach ($data as $row)
                <tbody>
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td><a href="{{ url('Promotion/' . $row->id . '/edit') }}" class="btn btn-secondary">Edit</a>    
                        <form action="{{ url('Promotion/' . $row->id ) }}" method="POST">
                
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                        </form></td>
                    </tr>
                </tbody>
            @endforeach
            
          
          </table>
    
        
    <div>
        <div></div>
        <div></div>
    

    </div>

   
</div>

    <script src="{{ URL::asset('js/script.js') }}"></script>
    
@endsection