<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>User Create</title>
</head>
<body>
    <a href="{{ route('users-index') }}">Voltar</a>
    <div class="container">
        <form action="{{ route('users-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="text" class="form-control" name="password" placeholder="Senha">
                </div>
            </div>
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
</body>
</html>
        