<?php
include "conexao.php";
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$data=$_POST['data'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);

$consulta= "INSERT INTO usuario(nome,endereco,telefone,data,email,senha)
 VALUES('$nome','$endereco','$telefone','$data', '$email', '$senha')";
 if(mysqli_query($conexao, $consulta)){
     echo"cadastro realizado com sucesso";
 }
 else{
        echo"erro ao cadastra-se".mysqli_error($conexao);
}
?>

