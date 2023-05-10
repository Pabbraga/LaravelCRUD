<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/users/show" class="nav-link">Buscar Usuário</a>
                </li>
                <li class="nav-item">
                    <a href="/users/create" class="nav-link">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a href="/users/edit" class="nav-link">Editar Usuário</a>
                </li>
                <li class="nav-item">
                    <a href="/users/delete" class="nav-link">Apagar Usuário</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="users-container">
        @foreach ($users as $user)
            <div class="card col-md-4">
                <div class="card-body">
                    <p>ID: {{$user['id']}}</p>
                    <p>Nome: {{$user['name']}}</p>
                    <p>Email: {{$user['email']}}</p>
                    <p>Idade: {{$user['age']}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <footer><p>UsersData &copy; 2023</p></footer>
</body>
</html>