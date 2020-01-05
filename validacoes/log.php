<html>
    <script>
        function alerta(){
            alert("Login ou senha inválidos, Tente novamente!")
        }
    </script>

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

    
   //VALIDANDO O LOGIN, SE TUDO CERTO VAI PARA DASHBOARD SE NÃO, MENSAGEM DE ERRO E INDEX
    if($teste != null){
        $_SESSION["nome_user"] = $teste["nome"];
        header("Location: dashboard.php");

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Ocorreu um erro. A premissa não foi incluída')
        window.location.href='../index.php';
            </SCRIPT>");
            
    }

exit;

?>
<br>
<a href="../index.php"> Voltar</a>

<?php

?>

</html>