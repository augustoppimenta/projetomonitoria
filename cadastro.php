<!DOCTYPE html>
<html>
   <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
   </head>
   <body>
	 <?php include("menu.php") ?>
        <div class="panel panel-default">
        <div class="panel-heading">CADASTRO</div>
        <div class="panel-body">
                <form action="realizacadastro.php" method="POST">
			Nome</br>
			<input type="text" name="nome" value=""></br>
                        Email</br>
                        <input type="text" name="email" value=""></br>
                        Senha</br>
                        <input type="password" name="senha" value=""></br>
                        <input class="btn btn-primary" type="submit" value="Cadastrar Dados">
                </form>
		<a href="index.php">Login</a>
        </div>
        </div>
   </body>
</html>



