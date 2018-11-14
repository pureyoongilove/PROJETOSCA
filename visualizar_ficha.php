<?php
//session_start();
include("conexao.php");
if(isset($_SESSION['usr'])){
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
	
</head>

	<body>

		<!---------------------------- NAVBAR ---------------------------->
		<div class="topnav" id="myTopnav">
				<a>
				  <img src="img/logoNav.png" alt="logo" style="width:20px">
				</a>
			<a href="indexAluno.php" class="active">Home</a>			
			<a href="usr_ficha.php">Consultar ficha</a>
			<a href="visualizar_ficha.php">Consultar anamnese</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">				
				<a href="sair.php"><i class="fa fa-sign-out"></i> Sair </a> 
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
	<br/>
	<h2>Visualize sua Ficha <img src="img/fichatec.png" alt="Academia" width="100" height="65"></h2>
	<hr>
	<br/>

<?php 
//include("conexao.php");
$conexao = $_SESSION['con'];
$cpf = $_SESSION['usr'];
$id="fail";
$sql = "SELECT * FROM `cliente` WHERE `cpf` = $cpf";

$vis = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_assoc($vis)) {
	$id = $dados['id'];
}
//echo $id;
$sql = "SELECT * FROM `anamnese` WHERE `id_cliente` = $id";
$visu = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_assoc($visu)) {
	
	echo "<h2>&nbsp;&nbsp;Atividades da vida diária <img src='img/temp_icon_usr.png' alt='Academia' width='30'></h2>		    
		  <br/>

	<div class='row'>
<div class='form-group col-md-3'>
  <label for='fuma'>É fumante?</label>
		<br/><br/>
		<input type='radio' name='fuma' value='sim'> Sim </label>  
        <input type='radio' name='fuma' value='não'> Não </label> 	
</div>

<div class'form-group col-md-3'>
  <label for='bebe'>Bebe?</label>  
		<br/><br/>  
		<input type='radio' name='bebe' value='sim'> Sim</label>  
        <input type='radio' name='bebe' value='não'> Não</label>
</div> 

<div class='form-group col-md-6'>
    <div class='form-group'>
      	<label for='hstrab'>Horário de Saída do trabalho:</label>
      	<select class='form-control'>
          <option name='hstrab' value='5h'>5hrs</option>
          <option name='hstrab' value='7h'>7hrs</option>
          <option name='hstrab' value='10h'>10hrs</option>
          <option name='hstrab' value='12h'>12hrs</option>
		  <option name='hstrab' value='15h'>15hrs</option>       					
      	</select>     
   </div>
</div> 
</div>
	
	<div class='row'>
<div class='form-group col-md-3'>

<label for='faz_exer'>Faz exercícios?</label> 
		<br/><br/>
		<input  type='radio' name='faz_exer' value='sim' disabled> Sim</label>
        <input type='radio' name='faz_exer' value='não' disabled> Não</label>  	
</div>
 

<div class='form-group col-md-3'>
	
 <label for='exer_qual'>Quais?</label>
 <input type='text' name='exer_qual' value='" . $dados['exercicio_qual'] . "' class='form-control' disabled>

</div>

<div class='form-group col-md-3'>
  
    <div class='form-group'>
      	<label for='horas_sono'>Quantas horas dorme por dia?</label>
      	<select class='form-control' disabled>
          <option name='horas_sono'value='4 horas'>4hrs</option>
          <option name='horas_sono' value='5 horas'>5hrs</option>
          <option name='horas_sono' value='6 horas'>6hrs</option>
          <option name='horas_sono' value='7 horas'>7hrs</option>
		  <option name='horas_sono' value='8 horas ou mais'>+8hrs</option>       					
      	</select>     
   </div>
  
</div>
</div>

<br/><br/>
<h2>&nbsp;&nbsp;Histórico médico <img src='img/heart_icon_usr.png' alt='Academia' width='35'></h2>

<div class='row'>
<div class='form-group col-md-5'>
  <label for='problema_familia'>Possui alguém com problemas cardíacos na família?</label>  
		<br/><br/>
		<input type='radio' name='problema_familia' value='sim' disabled> Sim</label>   
        <input type='radio' name='problema_familia' value='não' disabled> Não</label> 	
</div>

<div class='form-group col-md-5'>
  <label for='familia_qual'>Quem?</label>
  <input type='text' name='familia_qual' value='" . $dados['familia_qual'] . "' class='form-control' disabled>
</div>
</div>

<div class='row'>
<div class='form-group col-md-5'>
  <label for='doenca'>Possui alguma doença?</label>
		<br/><br/>
		<input type='radio' name='doenca' value='sim' disabled> Sim</label>
        <input type='radio' name='doenca' value='não' disabled> Não</label> 
</div>

<div class='form-group col-md-5'>
  <label for='doenca_qual'>Qual?</label>
  <input type='text' name='doenca_qual' value='" . $dados['doenca_qual'] . "' class='form-control' disabled>
</div>
</div>

<div class='row'>
<div class='form-group col-md-5'>
  <label for='cirurgia'>Já fez alguma cirurgia?</label> 
		<br/><br/>
		<input type='radio' name='cirurgia' value='sim'> Sim</label>
        <input type='radio' name='cirurgia' value='não'> Não</label>
</div>

<div class='form-group col-md-5'>
  <label for='cirurgia_qual'>Qual?</label>
  <input type='text' name='cirurgia_qual' value='" . $dados['cirurgia_qual'] . "' class='form-control' disabled>
</div>
</div>

<div class='row'>
<div class='form-group col-md-2'>
  <label for='medicamento'>Faz uso de medicamentos?</label>
		<br/><br/>
		<input type='radio' name='medicamento' value='sim'> Sim</label>
        <input type='radio' name='medicamento' value='não'> Não</label>
</div>

<div class='form-group col-md-5'>
  <label for='medi_qual'>Quais?</label>
  <input type='text' name='medi_qual' value='" . $dados['medi_qual'] . "' class='form-control' disabled>
</div>

<div class='form-group col-md-2'>  
      	<label for='medi_quant'>Quantidade?</label>
      	<select class='form-control' disabled>
          <option name='medi_quant' value=''></option>
          <option name='medi_quant' value='1'>1</option>
          <option name='medi_quant' value='2'>2</option>
          <option name='medi_quant' value='3'>3</option>
          <option name='medi_quant'value='4'>4</option>
		  <option name='medi_quant'value='+4'>+ de 4</option>       					
      	</select>     
</div>
</div> 
</div>

<div class='row'>
<div class='form-group col-md-11'>
  <label for='estresse'>Qual o seu nível de estresse durante o dia?</label>
  <input type='text' name='estresse' value='" . $dados['estresse'] . "' class='form-control' disabled>
</div>
</div>

<div class='row'>
<div class='form-group col-md-2'>
  <label for='dor'>Sente alguma dor que impeça sua tarefas diárias?</label>
   <br/><br/>
   <input type='radio' name='dor' value='sim'> Sim</label>
   <input type='radio' name='dor' value='não'> Não</label>
</div>


<div class='form-group col-md-4'>
  <label for='dor_qual'>Qual?</label>
  <input type='text' name='dor_qual' value='" . $dados['dor_qual'] . "' class='form-control' disabled>
</div>

<div class='form-group col-md-3'>
  <label for='dor_local'>Em que local?</label>
  <input type='text' name'dor_local' value='" . $dados['dor_local'] . "' class='form-control' disabled>
</div>
</div> 

<div class='row'>
<div class='form-group col-md-5'>
  <label for='alergia'>Possui alguma alergia?</label> 
		<br/><br/>
		<input type='radio' name='alergia' value='sim'> Sim</label>
        <input type='radio' name='alergia' value='não'> Não</label>
</div>

<div class='form-group col-md-5'>
  <label for='alergia_qual'>Qual?</label>
  <input type='text' name='alergia_qual' value='" . $dados['alergia_qual'] . "' class='form-control' disabled>
</div>
</div>
</div>

<div class='row'>
<div class='form-group col-md-5'>
  <label for='restri_exercicio'>Possui restrição a prática de exercícios?</label> 	
		<br/><br/>
		<input type='radio' name='restri_exercicio' value='sim'> Sim</label>
        <input type='radio' name='restri_exercicio' value='não'> Não</label>
</div>


<div class='form-group col-md-5'>
  <label for='restric_qual'>Qual?</label>
  <input type='text' name='restric_qual' value='" . $dados['restric_qual'] . "' class='form-control' disabled>
</div>
</div>
</div>  

<br/><br/>
<h2>&nbsp;&nbsp;Objetivos com relação a atividade física <img src='img/atv_icon_usr.png' alt='Academia' width='30'></h2>

<div class='row'>
<div class='form-group col-md-10'>
    			<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo1'>
        				<input type='checkbox' class='form-check-input' name='objetivo1' value='Estética'>Estética</label>
    			</div>
    			<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo2'>
        				<input type='checkbox' class='form-check-input' name='objetivo2' value='Lazer'>Lazer</label>
    			</div>
    			<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo3'>
        				<input type='checkbox' class='form-check-input' name='objetivo3' value='Terapêutico'>Terapêutico</label>
    			</div>
				<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo4'>
        				<input type='checkbox' class='form-check-input' name='objetivo4' value='Cond. Físico'>Cond. Físico</label>
    			</div>
				<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo5'>
        				<input type='checkbox' class='form-check-input' name='objetivo5' value='Convivio Social'>Convivio Social</label>
    			</div>
				<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo6'>
        				<input type='checkbox' class='form-check-input' name='objetivo6' value='Emagrecimento'>Emagrecimento</label>
    			</div>
				<div class='form-check form-check-inline'>
      				<label class='form-check-label' for='objetivo7'>
        				<input type='checkbox' class='form-check-input' name='objetivo7' value='Hipertrofia'>Hipertrofia</label>
    			</div>				

	<br/><br/><br/>

";
}
?>