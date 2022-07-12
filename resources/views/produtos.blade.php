<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <title>Produtos</title>
</head>
<body>
  
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route("principal")}}">Home</a>
          <a class="nav-link" href="{{route("produtos")}}">Produtos</a>
          <a class="nav-link" href="{{route("contato")}}">Contato</a>
        </div>
      </div>
    </div>
  </nav>
  
  <h1 class="h1-produtos">Tabela de Produtos</h1>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th  scope="col">Código do produto</th>
        <th scope="col">Produto</th>
        <th scope="col">Preço</th>
        
      </tr>
    </thead>
    <tbody class="table-secondary" id="produtos_tabela"></tbody>
  </table>
  <div class="bg-info bg-produtos">
  <h2 class="h2_produto">Crie ou Apague um produto</h2>
  <div class="altera_produtos">
  
  <input type="email" class="form-control input-produto" id="pesquisa_produto" placeholder="Digite o nome de um produto">
 
  
 
</div>
<div class="altera_produtos produtos-buttons">
<input type="submit" class="btn btn-success"  id="cria_produto" value="Criar Produto"></button>
  <input type="submit" class="btn btn-danger" id="exclui_produto" value="Excluir Produto"></button>
</div>

  <h2 class="h2_produto">Altere um produto</h2>
  <div class="altera_produtos mb-3">
    
    <input type="email" class="form-control input-produto" id="pesquisa_produto" placeholder="Digite o id do  produto que vai ser alterado">
    <input type="text" class="form-control input-produto" id="pesquisa_produto" placeholder="Digite o novo nome do produto">
    <input type="text" class="form-control input-produto" id="pesquisa_produto" placeholder="Digite o novo preço do produto">
    
</div>
<div class="altera_produtos produtos-buttons">

<button type="button" class="btn btn-warning">Alterar Produto</button>

</div>
</div>
 
 <script src="{{asset("js/app_tabela_produtos.js")}}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>