<?php
//session_start();
include ("conexao.php");
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
	 <!------- estilo NAVBAR --------->
	 <link rel="stylesheet" type="text/css" href="css/style.css"/>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!------- estilo LISTA CLIENTES --------->	
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/estilo.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!------- estilo LISTA CLIENTES --------->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
<style type="text/css">
body{
	 background: url(img/cadastro.jpg) no-repeat 0px 0px;
	 background-attachment: fixed;
 }
 
label, h2 {
	color:white;
} 

div.alert {
    width: 70%;
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
				<a href="sair.php"><img src="img/sair_icon.png" alt="Academia" width="25"> Sair</a>
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
	
	<script src="jquery/dist/jquery.js"></script>
    <script src="popper.js/dist/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
		
	</body>
</html>	

<?php

//include ("conexao.php");

$con = $_SESSION['con'];

date_default_timezone_set('America/Sao_Paulo');
$data = date("Y/m/d");
     str_replace('/','-',$data);

$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$valor = $_POST['valor'];

$pesquisa = "SELECT * FROM `cliente` WHERE `cliente`.`cpf` = '$cpf'";
$consulta = mysqli_query($con, $pesquisa);

  while( $dados = mysqli_fetch_assoc($consulta) ){
      $id = $dados['id'];
  }

  $inserir = "INSERT INTO mensalidade (data,valor,id_cliente) VALUES ('$data','$valor','$id')";
  $query = mysqli_query($con, $inserir);
  
  echo "<br/><br/><br/><br/><br/><br/><br/><br/>
  
  <div align='center'>
  <div class='alert alert-success'>				
	<strong>Pagamento efetuado com sucesso!</strong> O que deseja fazer agora?
  </div>
  </div>
	
  <div align='center'> 
      <br/><br/><br/>
	  <a href='buscar.php'><button type='button' class='btn btn-basic btn-xs'><img src='img/voltar_icon.png' alt='Academia' width='30'> Voltar para a lista de alunos</button></a>
      <a href='pagamento.php'><button type='button' class='btn btn-secondary btn-xs'> Efetuar novo pagamento <img src='img/pag_icon.png' alt='Academia' width='18'></button></a>	    
  </div>";
  
?> 