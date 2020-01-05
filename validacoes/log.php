<?php
require 'conecta.php';


session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$cripto = md5($senha);
//VALIDAÇÃO DE LOGIN
    //Variavel resultado recebendo comando select com dados do login
    $results = ("SELECT * FROM user WHERE nome = '$login' and senha = '$cripto'");

    
    //SQL executando o comando select na conexão conecta.php
    $sql = mysqli_query($conn, $results);

   

    //Teste verificando se o comando select retornou alguma linha.
    $teste = mysqli_fetch_assoc($sql);

    

    if($teste != null){
        $_SESSION["nome_user"] = $teste["nome"];
        header("Location: teste.php");

        //echo "Funciona <h1>$login é o cara</h1> LOGIN OK";
    }else{
        echo "ihh bixo, deu ruim dnv LOGIN INVALIDO";
    }

exit;

?>
<br>
<a href="../index.php"> Voltar</a>

<?php

?>