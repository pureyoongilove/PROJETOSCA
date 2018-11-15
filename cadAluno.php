<?php
session_start();
if(isset($_SESSION['prof'])|| isset($_SESSION['adm'])){
	//echo"bem vindo $_SESSION[adm]";
}else{header("location:login.php");}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<title> SCA </title>
	<meta charset="utf-8">
	<link rel="icon" type="imagem/png" href="img/logo.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!------- estilo NAVBAR ------->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">	
	<link rel="stylesheet" href="css/styleCad.css">
	<!------- mascara FORMULARIO ------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<style>
body{
	 background: url(img/cadastro.jpg) no-repeat 0px 0px;
	 background-attachment: fixed;
 }
 
label, h2 {
	color:white;
} 
</style>		
	
</head>

	<body>

		<!---------------------------- NAVBAR ---------------------------->
		<div class="topnav" id="myTopnav">
				<a>
				  <img src="img/logoNav.png" alt="logo" style="width:20px">
				</a>
			<a href="indexProf.php" class="active">Home</a>			
			<a href="buscar.php">Gerenciar alunos</a>									
			<a href="inadimplentes.php">Alunos inadimplentes</a>
			<a href="pagamento.php">Pagamentos</a>
			<a href="cadAluno.php">Cadastrar aluno</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">				
				<a href="sair.php"><img src="img/sair_icon.png" alt="Academia" width="25"> Sair </a> 
			</div>	
			</a>
	    </div>
	
		<!---------------------------- SCRIPT NAVBAR ---------------------------->
	<script>
		function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
        x.className += " responsive";
			} else {
        x.className = "topnav";
		   }
		}
	</script>
	
		<!---------------------------- FORMULARIO ---------------------------->
<br/> 
<h2>&nbsp;&nbsp;Novo Aluno <img src="img/adduser_icon.png" alt="Academia" width="40"></h2>

<form action="cad.php" method="POST">
  <hr/>
  <div class="row">
    <div class="form-group col-md-8">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" required>
    </div>

     <div class="form-group col-md-1">
      <label for="sexo">Sexo</label>   	
      		<label><input type="radio" name="sexo" value="M">Feminino</label>
      		<label><input type="radio" name="sexo" value="F">Masculino</label>    				
    </div>

    <div class="form-group col-md-2">
      <label for="data_nas">Data de Nascimento</label>
      <input type="date" class="form-control" name="data_nas" required>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-7">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" placeholder="Ex.: Avenida Simões de Almeida, 150" required>
    </div>

    <div class="form-group col-md-2">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Ex.:000.000.000-00" required>
    </div>
    
    <div class="form-group col-md-2">
      <label for="rg">RG</label>
      <input type="text" class="form-control" name="rg" id="rg" placeholder="Ex.:00 000 000-0" required>
    </div>    
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Ex.: exemplo@gmail/hotmail/outlook.com" required>
    </div>
    
    <div class="form-group col-md-3">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Ex.:(00) 0000-0000" required>
    </div>
	
	<div class="form-group col-md-3">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="senha"  placeholder="•••••••" required>
    </div>
  
  <br/><br/><br/>
  
  <div id="actions" class="row" align="right">
    <div class="col-md-12">
      <br/><br/><br/>
	  <button class="btn btn-success btn-xs" type="submit" name="enviar"> Adicionar aluno <img src="img/ok_icon.png" alt="Academia" width="25"></button>
      <a href="buscar.php"><button type="button" class="btn btn-danger btn-xs"> Calcelar <img src="img/cancel_icon.png" alt="Academia" width="18"></button></a>
    </div>
  </div>
</form>	 
 
 <!------------ MÁSCARA FORM ------------->
 <script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
	$("#cpf").mask("000.000.000-00");
	$("#rg").mask("00 000 000-0");
 </script>

	</body>
	
</html>
