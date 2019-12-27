<?php
//Fazendo requisição da página de conexão
require 'conecta.php';

$login = $_POST['login'];
$outro = $_POST['outro'];
$senha = $_POST['senha'];


//INSERINDO REGISTROS DO FORMULARIO NA TABELA - CADASTRO
    $sql = "INSERT INTO concson(nome, outro, senha) VALUES ( '$login','$outro', '$senha')";

    if(mysqli_query($conn,$sql)){
        echo "inseriu meu irmãoooooo";
    }else{
        echo "ihhh bixoooo, acho que deu ruim";
    }
   
?>
<br>
    <a href="index.php"> Voltar</a>
    
    <?php
    
?>