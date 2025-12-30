<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <title>Banco</title>
</head>
<div class="bg-dark py-4">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link text-light" target="_blank"
               href="https://www.linkedin.com/in/rafael-moura-pcd-598b85b7/">
                <i class="bi bi-linkedin"></i> LinkedIn
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-light" target="_blank"
               href="https://github.com/RafaelM17">
                <i class="bi bi-github"></i> GitHub
            </a>
        </li>
    </ul>
</div>

<body class="d-flex flex-column min-vh-100">
    <div class="p-5 bg-secondary bg-gradient text-cente">
        <h1 class ='text-cente'>A LISTA PARA NOMES</h1>
    <form action="/banco" method="POST">
        @csrf

        <input type="text" name="nome" placeholder="Digite o nome">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>

  @foreach ($nomes as $nome)

       
    <p>{{ $nome->id }} - {{ $nome->nome }} 

       <form action="/banco/{{ $nome->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nome" placeholder="Novo nome">
            <button class="btn btn-info"><i class="bi bi-arrow-90deg-left"></i> Atualizar</button>
        </form>
        
        <form action="/banco/{{ $nome->id }}" method="POST" >
            @csrf
            @method('DELETE')
            <button class="btn btn-info" type="submit"><i class="bi bi-arrow-90deg-up"></i> APAGAR</button>
            
        </form>
    </p>
@endforeach
</div>
<footer class="bg-dark text-light p-5 mt-auto ">
    <div class="container text-center">
        <p class="mb-1">Sistema de Treino Laravel</p>
        <small>Design por <strong>Rafael Moura</strong></small>
    </div>
</footer>
</body>
</html>
