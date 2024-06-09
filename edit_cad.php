
<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$consulta = "UPDATE usuario set nome = '$nome',endereco = '$endereco',telefone = '$telefone',data = '$data', email ='$email',senha ='$senha' WHERE id ='$id'  ";
if ($conexao = mysqli_query($conexao, $consulta)) {
    echo "auterado com sucesso";
} else {
    echo "erro ao cadastra-se" . mysqli_connect_error($conexao);
}


?>
  