<!DOCTYPE html>
<<<<<<< HEAD
<head>
    <title>Login V15</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v15/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v15/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="login100-form validate-form" action="validacoes/log.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="login" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="validacoes/rsenha.php" class="txt1">
								Esqueci minha senha?
							</a>
                        </div>
                        <div>
                            <a href="validacoes/cadastro.php">
                                Criar conta
								
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="Login_v15/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v15/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v15/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/js/main.js"></script>

</body>
</html>

=======
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
        <h1>LOGIN</h1><br>
            <div>
               
            <!--Form mandando informações para a pagina de inserção de dados -->
            
            <form action="log.php" method="post">
                <label>Nome:</label><br>
                <input type="text" name="login" placeholder="Zezinho Doideira"><br>
                <label>Senha:</label><br>
                <input type="password" name="senha" placeholder="123456"><br><br>
                <a href="cadastro.php">Criar conta</a><br><br>
                <input type="submit">
                <a href="rsenha.php">Esqueci Minha Senha</a>
            </form>
            </div>
            
        </body>
    </html>
>>>>>>> 23cc6f61976f83d60c971ce53064bd50ffc30f15
