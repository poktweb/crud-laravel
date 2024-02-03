<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
</head>
<body>
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <form action="/cadastrar" method="post">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Seu Nome..." name="nome">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Seu Telefone..." name="telefone">
          </div>

          <button class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
</body>
</html>
