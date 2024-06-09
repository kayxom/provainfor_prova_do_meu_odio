<?php 
$host = 'localhost';
$user = 'root';
$senha = '';
$bd = "bd";
if ($conexao = mysqli_connect($host, $user, $senha, $bd)) {
    // echo "conectado com sucesso";
} else {
    echo "falhou";
}
function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'>
            $texto
    </div>";
}


function mostrar_data($data){
    $d = explode("-",$data);
    $escreve = $d[2]."/".$d[1]."/" .$d[0];
    return $escreve;

}


?>