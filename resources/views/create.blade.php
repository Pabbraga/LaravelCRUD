<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

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
        <h4>Cadastrar Usuário</h4>
        <form action="/user" method="POST">
            @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Idade:</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary is-right">
        </form>
    </div>    
    <footer>
        <p>UsersData &copy; 2023</p>
    </footer>
</body>
</html>