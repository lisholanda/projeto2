<?php
//receber o id de quem será excluido
$id = $_GET["id"];

//abrir a conexão com o banco
include_once './conexao.php';
//montar a instrução de ir ao banco
$sql ="delete from cliente where idcliente=" .$id;
//igual ao gravar
if(mysqli_query($con,$sql)){
    $msg = "Excluido com sucesso";
}    else{
    $msg =" Erro o Excluir";

    }
//fechar a conexão com o banco
mysqli_close($con);
echo"<script> alert ('".$msg"');
location.href= 'consultar.php';
</script>";

?>