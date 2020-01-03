<?php
//inicia sessão
session_start();


if(!isset($_SESSION["nome_user"])){

    header("Location: ../index.php");
}


?>