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

    <table class="table">
            
        <thead>
            
          <tr>
            <th scope="col">id</th>
            <th scope="col">Promotion</th>
            <th scope="col">Edit / Delete</th>
            <th scope="col"></th>
          </tr>
        </thead>

        @foreach ($promotion as $row)
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
</body>
</html>

