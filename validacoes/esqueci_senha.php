<?php 

require 'conecta.php';
//Pegando dados do esqueci minha senha
$login = $_POST['login'];
$newsenha = $_POST['new_senha'];

//Alterando senha do usuario na base
$sql = "UPDATE user SET senha = '$newsenha' WHERE nome = '$login'";

$comando = mysqli_query($conn, $sql);

//validando e dando informação ao usuário
if($comando){
    echo "Senha atualizada com sucesso";
}else{
    echo "Deu ruim com a senha dnv";
}


?>

<br>
<a href="../index.php"> Voltar</a>

<?php

?>