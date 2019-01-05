<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon 2x" type="image/x-png" href="../img/loja.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyBazz Easy</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  
  
  
      <link rel="stylesheet" href="css/estilo.css">

  
</head>

<body>
<div class="buttonback" title="Voltar">
	<a href="../index.html"><i class="fas fa-2x fa-sign-out-alt"></i></a>
</div>
  <header class='speaker-form-header'>
      <h1>Login</h1>
      <p><em>Bem-Vindo de volta!</em></p>
  <?php
if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

  ?>

</header>

  <div class="box">
  <div class="outter-part">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner-part">
      <div class="gif-part">  <form class="speaker-form" method="POST" action="valida.php">
  <div class="form-row">
  <label for='full-name'>Usuário</label>
  <input type="text" placeholder="Digite seu usuario!" name='full-name'>
  </div>
  <div class="form-row">
   <label for='password'>Senha</label>
  <input type="password" placeholder="Digite sua senha!" name="senha">
  </div>
  <input class="button" type="submit" name=" btnLogin" value="ACESSAR">
  <a class="cad" href="cadastrar.php">Ainda não possui cadastro?<strong>Cadastre-se Agora!</strong></a>

</form></div>
    </div>
    <div class="part-1"></div>
    <div class="part-2"></div>
  </div>
</div>
  
  

</body>

</html>