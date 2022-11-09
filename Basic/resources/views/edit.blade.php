<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action=" {{ route('Promotion.update', $data[0]->id_promo) }} " method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="update_input" value="{{ $data[0]->name }}">
        <input type="submit" value="update">
    </form>

    <table class="table">

        <thead>
                
            <tr>
              <th scope="col">id</th>
              <th scope="col">nom</th>
              <th scope="col">prnom</th>
              <th scope="col">email</th>
              <th scope="col">Edit / Delete</th>
            </tr>

        </thead>

        @if ($data[0]->id != null)
            @foreach ($data as $row)
            <tbody>
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <th scope="row">{{$row->nom}}</th>
                    <th scope="row">{{$row->prenom}}</th>
                    <th scope="row">{{$row->email}}</th>
                    <th scope="row">
                        <button type="submit"><a href="{{ route('edit_form_appr', ['id'=>$row->id]) }}" class="btn btn-secondary">Edit</a></button>
                        <form action="{{ url('delete_apprenants' , ['id'=>$row->id]) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </th>
                </tr>
            
                {{-- <p>{{$row->nom}} - {{$row->prenom}} - {{$row->email}}</p>
                <div>
                    <button type="submit"><a href="{{ route('edit_form_appr', ['id'=>$row->id]) }}">Edit</a></button>
                    
                    <form action="{{ url('delete_apprenants' , ['id'=>$row->id]) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" >DELETE</button>
                    </form>
                </div>
            </div> --}}
            </tbody>

            @endforeach
        @endif

    </table>


        <!-- Button  trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add appreanats
        </button>
  
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create apprenants</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="{{ route('add_appr') }}" method="POST">
                        
                        @csrf
                        <input type="text" name="prenom" placeholder="prenome">
                        <input type="tex" name="nom" placeholder="nome">
                        <input type="email" name="email" placeholder="email">
                        
                        <input type="hidden" name="id_promotion" value="{{ $data[0]->id_promo }}">  

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">ajouter appranants</button>
                        </div>
                    </form>
                </div>
                
            
            </div>
            </div>
        </div>
       

</body>
</html>