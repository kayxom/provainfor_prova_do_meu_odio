<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php
    include ("conexao.php");
    $id = $_GET["id"] ?? '';
    $sql = "SELECT * FROM usuario WHERE id=$id";
    $dados = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($dados);
        ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração de dados</h1>
                <form action="edit_cad.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value=<?php echo $linha['nome']; ?>>

                        
                        <label for="endereco" class="form-label">endereco</label>
                        <input type="text" class="form-control" name="endereco" required value=<?php echo $linha['endereco']; ?>>

                         
                        <label for="telefone" class="form-label">telefone</label>
                        <input type="text" class="form-control" name="telefone" required value=<?php echo $linha['telefone']; ?>>

                        
                        <label for="data" class="form-label">data</label>
                        <input type="date" class="form-control" name="data" required value=<?php echo $linha['data']; ?>>



                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" name="email" required value=<?php echo $linha['email']; ?>>

                        <label for="senha" class="form-label">senha</label>
                        <input type="password" class="form-control" name="senha" required value=<?php echo $linha['senha']; ?>><br>

                      
                        <input type="submit" class="btn btn-success" value="SALVAR ALTERAÇÕES">
                        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">


                        <a href="pesquisa.php" class=" btn btn-info">Voltar ao Inicio</a>
                    </div>
            </div>
        </div>
    </div>
        <hr>
       
      </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>