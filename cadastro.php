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
                            margin-left: 50%;
                            align: center;
                        
                        }
                        div{
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                </style>
        </head>
        <body>
            <h1>Cadastro</h1>
            <div>
               
            <!--Form mandando informações para a pagina de inserção de dados -->
            <form action="cad.php" method="post">
                <label>Nome:</label><br>
                <input type="text" name="login" placeholder="Zezinho Doideira"><br>
                <label>Senha:</label><br>
                <input type="password" name="senha" placeholder="123456"><br>
                <label>Outro:</label><br>
                <input type="text" name="outro" placeholder="descrição"><br>
                <input type="submit" value="cadastrar"><br>
                
            </form>
            </div>
            
        </body>
    </html>