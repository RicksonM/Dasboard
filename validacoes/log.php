<?php

require 'conecta.php';

$login = $_POST['login'];
$senha = $_POST['senha'];
//VALIDAÇÃO DE LOGIN
    //Variavel resultado recebendo comando select com dados do login
    $results = ("SELECT * FROM user WHERE nome = '$login' and senha = '$senha'");

    //SQL executando o comando select na conexão conecta.php
    $sql = mysqli_query($conn, $results);

    //Teste verificando se o comando select retornou alguma linha.
    $teste = mysqli_fetch_assoc($sql);

    if($teste > 0){
        echo "Funciona <h1>$login é o cara</h1> LOGIN OK";
    }else{
        echo "ihh bixo, deu ruim dnv LOGIN INVALIDO";
    }
?>
<br>
<a href="../index.php"> Voltar</a>

<?php

?>