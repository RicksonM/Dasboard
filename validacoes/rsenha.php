<!DOCTYPE html>
    <html>
        <head>
            <title>
            </title>
           
            <!-- fontes -->
                <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
                <style>
                        h1{
                            font-family: 'Indie Flower', cursive;
                        }
                        div{
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                </style>
        </head>
        <body>
            <div>
            <!--Form mandando informações para a pagina de inserção de dados -->
            <form action="esqueci_senha.php" method="post">
                <label>Login:</label><br>
                <input type="text" name="login" placeholder="Zezinho Doideira"><br>
                <label>Nova Senha:</label><br>
                <input type="password" name="new_senha" placeholder="123456">
                <input type="submit">
            </form>
            </div>
            
        </body>
    </html>