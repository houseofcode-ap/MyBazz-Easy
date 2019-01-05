<?php
include("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon 2x" type="image/x-png" href="../img/loja.png">
    <title>Mybazz Easy</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="css/cad.css">
    <style>
        select{
            background-color: #FFFFFF;
            border: 8px solid #D6D9DC;
            box-shadow: 0px 0px 10px rgba(0,0,0,1);
            border-radius: 3px;
            width: 100%;
            padding: 7px;
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="buttonback" title="Voltar">
	<a href="../index.html"><i class="fas fa-2x fa-sign-out-alt"></i></a>
</div>
	<header class='speaker-form-header'>
      <h1>Cadastro</h1>
      <p><em>Preencha seus dados e comece a passear conosco.
</em></p>

     </header>

	 <div class="box">
  <div class="outter-part">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner-part">
      <div class="gif-part">
      <form class="speaker-form" method="POST" action="processa.php">
         <div class="form-row">
            <div class="form-row div-esq">
                <div class="form-row div-ajust div-esq">
                    <label for='nome'>Primeiro Nome</label>
                    <input id="nome" type="text" required name="nome"placeholder="Primeiro Nome">
                </div>
                <div class="form-row div-ajust div-dir">
                     <label for="snome">Ultimo Nome</label>
                    <input id="snome" type="text" required name="snome"placeholder="Ultimo Nome">
                </div>
            </div>
            <div class="form-row div-ajust div-dir">
             <label for='email'>E-mail</label>
             <input type="email" required name="email" placeholder="Digite o seu e-mail!">
            </div>
         </div>
	<div class="form-row">
        <div class="form-row div-ajust div-esq">
            <label for='usuario'>Usuário</label>
            <input id="usuario" required type="text" name="usuario" placeholder="Digite seu usuario!">
            </div>
        <div class="form-row div-ajust div-dir">
            <label for="fone">Telefone</label>
            <input id="fone" type="text" required name="telefone" placeholder="Telefone">
            </div>
	</div>
    <div class="form-row">
        <div class="form-row div-ajust div-esq">
            <label for='data'>Data</label>
            <input id="data" required type="date" name="data">
        </div>
        <div class="form-row div-ajust div-dir">
            <label for='sexo'>Sexo</label>
            <select required class="sexo" name="sexo">
                <option value="1">Feminino</option>
                <option value="2">Masculino</option>
            </select>
        </div>
    </div>
	<div class="form-row">
        <div class="form-row div-ajust div-esq">
            <label for='senha'>Senha</label>
            <input required type="password" name="senha" placeholder="Digite sua senha!">
        </div>
        <div class="form-row div-ajust div-dir">
            <label for='csenha'>Confirme</label>
            <input id="csenha" required type="password" name="csenha" placeholder="Confirmar senha!">
        </div>
	</div>

	<input class="button" type="submit" value="CADASTRAR">
    </form>
      </div>
    </div>
    <div class="part-1"></div>
    <div class="part-2"></div>
  </div>
</div>
</div>
</body>
</html>