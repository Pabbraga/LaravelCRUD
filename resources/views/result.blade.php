<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>

    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <div class="nav-brand">
            <h1>UsersData</h1>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Voltar</a>
            </li>
        </ul>
    </header>
    <div class="container col-md-6 offset-md-3">
        @if($user)
            <div class="form-body">
                <div class="card-body" style="padding: 10px">
                    <p>ID: {{$user['id']}}</p>
                    <p>Nome: {{$user['name']}}</p>
                    <p>Email: {{$user['email']}}</p>
                    <p>Idade: {{$user['age']}}</p>
                </div>
            </div>
        @elseif($msg)
            <h4>{{$msg}}</h4>
        @endif
    </div>
    <footer>
        <p>UsersData &copy; 2023</p>
    </footer>  
</body>
</html>