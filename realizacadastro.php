<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$dbconn = pg_connect("host=localhost dbname=bdweb user=bdweb password=bdweb2016") or die('Could not connect: ' . pg_last_error());

$validaremail = pg_query("SELECT * FROM usuario_augustobw WHERE email='$email'") or die("Query Failed" . pg_last_error());

$contar = pg_num_rows($validaremail);

if ($contar == 0) {
	$insert = pg_query("INSERT INTO usuario_augustobw(nome, email, senha) VALUES('$nome','$email','$senha')");
      echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='cadastro.php';</script>";
                    die();
	$redirect = "http://69.60.115.37/~augustobw/index.php";
	header("location:$redirect");
}
else{
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro não realizado!');window.location.href='cadastr.php';</script>";
                    die();
    $redirect = "http://69.60.115.37/~augustobw/cadastro.php";
    header("location:$redirect");
}

pg_close($dbconn);
?>
