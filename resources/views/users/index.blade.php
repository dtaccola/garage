<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Users List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1>Lista</h1>
                <a href="{{ route('users-create') }}" class="btn btn-primary">Novo registro</a>
            </div>
        </div>
        


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col"><center>Ações</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="d-flex">
                            <a href="{{ route('users-show', $user->id) }}" class="btn btn-info mr-1" >Detalhes</a>    
                            <a href="{{ route('users-edit', $user->id) }}" class="btn btn-warning mr-1" >Editar</a> 
                            <form action="{{ route('users-destroy', $user->id) }}" method="POST">   
                                @csrf
                                @method('DELETE')      
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>