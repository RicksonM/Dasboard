<?php

require('verifica.php');
require('conecta.php');
$nome = $_SESSION["nome_user"];

?>

<html>

    <h1><?php echo $nome; ?></h1>

</html>

<?php

exit;
?>