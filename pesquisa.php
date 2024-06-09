<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php
  $pesquisa = $_POST['busca'] ?? '';
  include "conexao.php";
  $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%'";
  $dados = mysqli_query($conexao, $sql);
  ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color:black">Pesquisa</h1>

        <nav class="navbar navbar-light bg-light">
        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
</form>
        
        </nav>
        <table class="table table-hover">
          <thead>
            <a href="index.php" class=" btn btn-success">Voltar ao Inicio</a>
            <tr>

              <br>
              <th scope="col" style="color:black">id</th>
              <th scope="col" style="color:black">nome</th>
              <th scope="col" style="color:black">endereco</th>
              <th scope="col" style="color:black">telefone</th>
              <th scope="col" style="color:black">data</th>
              <th scope="col" style="color:blcak">email</th>
              <th scope="col" style="color:black">ações</th>
             
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($dados)) {
              $id = $linha['id'];
              $nome = $linha['nome'];
              $endereco= $linha['endereco'];
              $telefone = $linha['telefone'];
              $data = $linha['data'];
              $data = mostrar_data($data);
              $email = $linha['email'];

              echo "<tr>
      <td>$id</td>
      <td>$nome</td>
      <td>$endereco</td>
      <td>$telefone</td>
      <td>$data</td>
      <td>$email</td>
      <td width= 150px><a href='edit.php? id=$id' class='btn btn-success btn-sm'>Editar</a>
                <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma' 
                onclick=".'"'."pegar_dados($id,'$nome')".'"'.">excluir</a>
                 </td>
    
      </tr>";
            }
            ?>

          </tbody>

        </table>
      </div>
    </div>
  </div>

     

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  
</body>

</html>