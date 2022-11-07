<?php  

date_default_timezone_set ("América/Sao_Paulo");

//resgate de dados da tela

$nome = $_POST["nome"];

$email = $_POST["email"];

$telefone = $_POST["telefone"];

$dtcadastro = data ("Y-m-d"); // padrão do banco

//abrir conexão com o banco de dados.

include_once'conexao.php';

//Montar o sql de gravação

(null,'ana','ana@gmail','1111-2222','2022-11-03');

$sql = "insert into cliente values";

(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')





if(mysqli_query($con,$sql)){

    $msg = "Gravado com sucesso";

}else{

    $msg = "Erro ao Gravar!";

}

//fechar conexão com o banco

mysqli_close($con);

echo"<script> alert('".$msg.");

include.href=("index.php");

</script>";
?>

