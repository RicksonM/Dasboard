<?php
//Fazendo requisição da página de conexão
require 'conecta.php';

$login = $_POST['login'];
$senha = $_POST['senha'];
$cripto = md5($senha);


//INSERINDO REGISTROS DO FORMULARIO NA TABELA - CADASTRO
    $sql = "INSERT INTO user(nome, senha) VALUES ( '$login', '$cripto')";

    if(mysqli_query($conn,$sql)){
        echo "inseriu meu irmãoooooo";
    }else{
        echo "ihhh bixoooo, acho que deu ruim";
    }
   
?>
<br>
    <a href="../index.php"> Voltar</a>
    
    <?php
    
?>