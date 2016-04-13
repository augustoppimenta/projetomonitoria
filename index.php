<!DOCTYPE html>
<html>
   <head>
    <title>Bem Vindo</title>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
   </head>
   <body>
    <?php include("menu.php") ?>
      <div class="container">
        <div class="jumbotron">
            <h1>Bem vindo ao sistema BW!</h1>
	       <p>Esse é um trabalho desenvolvido na disciplina de Banco de Dados Web - UFRN</p>
        </div>
        <div class="panel panel-default" class="col-lg-6">
            <div class="panel-heading">LOGIN</div>
	       <div class="panel-body">
	         <form class="form-login" action="login.php" method="POST">
	           Email</br>
	           <input type="text" name="email" value=""></br>
	           Senha</br>
   	           <input type="password" name="senha" value=""></br>
	           <input class="btn btn-primary" type="submit" value="Entrar">
	         </form>
	         Nao possui conta?<a href="cadastro.php"> Cadastre-se agora!</a>
	       </div>
	     </div>
          </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
   </body>
</html>

