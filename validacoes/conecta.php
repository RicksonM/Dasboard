<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$base = "conec";

//Verificando coneção
$conn = mysqli_connect($servidor, $usuario, $senha, $base);
    if(!$conn){
        echo "deu ruim CONEXÃO COM BRONCA <br>";
    }else{
        echo "funciona CONEXÃO OK <br>";
    }
    
 
?>
