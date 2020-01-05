<!DOCTYPE html>
    <html>
        <head>
            <title>Dashboard</title>
            <?php
                require('verifica.php');
                //require('conecta.php');
                $nome = $_SESSION["nome_user"];
            ?>
            <link rel="stylesheet" type="text/css" href="../css/css_dash/style.css">
        </head>
        <body>
            <div class="grid-container">
                <header class="header"></header>
                <aside class="sidenav"></aside>
                <main class="main"></main>
                <footer class="footer"></footer>
            </div>


        </body>

    </html>