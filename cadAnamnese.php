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
 
label, h2, div {
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
			<a href="#home" class="active">Home</a>			
			<a href="buscar.php">Gerenciar alunos</a>
			<a href="cadAnamnese.php">Criar anamnese</a>
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
<h2>&nbsp;&nbsp;Ficha da Anamnese: Identificação</h2>

<form method="POST" action="cad_anamnese.php" >
  <hr/>
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome do Cliente:</label>
      <input type="text" class="form-control" name="nome" required>
    </div>

    <div class="form-group col-md-1">

    <div class="form-group">
      	<label for="idade">Idade:</label>
      	<select class="form-control">
        	<option name="idade">12</option>
        	<option name="idade">12</option>
        	<option name="idade">14</option>
        	<option name="idade">15</option>
			<option name="idade">16</option>
			<option name="idade">17</option>
			<option name="idade">18</option>
			<option name="idade">19</option>
			<option name="idade">20</option>
			<option name="idade">21</option>
			<option name="idade">22</option>
			<option name="idade">23</option>
			<option name="idade">24</option>
			<option name="idade">25</option>
			<option name="idade">26</option>
			<option name="idade">27</option>
			<option name="idade">28</option>
			<option name="idade">29</option>
			<option name="idade">30</option>
			<option name="idade">31</option>
			<option name="idade">32</option>
			<option name="idade">33</option>
			<option name="idade">34</option>
			<option name="idade">35</option>
			<option name="idade">36</option>
			<option name="idade">37</option>
			<option name="idade">38</option>
			<option name="idade">39</option>
			<option name="idade">40</option>
			<option name="idade">41</option>
			<option name="idade">42</option>
			<option name="idade">43</option>
			<option name="idade">44</option>
			<option name="idade">45</option>
			<option name="idade">46</option>
			<option name="idade">47</option>
			<option name="idade">48</option>
			<option name="idade">49</option>
			<option name="idade">50 ou mais</option>
      		</select>
    	</div>
   
    </div>

    <div class="form-group col-md-2">
      <label for="peso">Peso:</label>
      <input type="text" class="form-control" name="peso" placeholder="Ex.: 50kg" id="peso" required>
    </div>
	
	<div class="form-group col-md-2">
      <label for="altura">Altura:</label>
      <input type="text" class="form-control" name="altura" placeholder="Ex.: 1.70m" id="altura" required>
    </div>
  </div>
  <br/><br/> 
<h2>&nbsp;&nbsp;Atividades da vida diária</h2>
<hr/> 
<div class="row">
<div class="form-group col-md-3">
  <label for="fuma">É fumante?</label>
		<br/><br/>
		<input type="radio" name="fuma" value="sim"> Sim           </label>  
        <input type="radio" name="fuma" value="não"> Não           </label> 	
</div>

<div class="form-group col-md-3">
  <label for="bebe">Bebe?</label>  
		<br/><br/>  
		<input type="radio" name="bebe" value="sim"> Sim</label>  
        <input type="radio" name="bebe" value="não"> Não</label>
</div> 

<div class="form-group col-md-3">
    <div class="form-group">
      	<label for="hstrab">Horário de Saída do trabalho:</label>
      	<select class="form-control">
          <option name="hstrab" value="5h">5hrs</option>
          <option name="hstrab" value="7h">7hrs</option>
          <option name="hstrab" value="10h">10hrs</option>
          <option name="hstrab" value="12h">12hrs</option>
		  <option name="hstrab" value="15h">15hrs</option>       					
      	</select>     
   </div>
</div> 
</div>

<div class="row">

<script language="javascript">
    function habilitacao(){
      if(document.getElementById('radioSim').checked == true){
        document.getElementById('quais').disabled = false;
        //document.getElementById('dataFinal').disabled = false;
      }
	if(document.getElementById('radioSim').checked == false){
       document.getElementById('quais').disabled = true;
      //  document.getElementById('dataFinal').disabled = true;
      }
    }
  </script>
<div class="form-group col-md-3">

<label for="faz_exer">Faz exercícios?</label> 
		<br/><br/>
		<input  type="radio" name="faz_exer" value="sim" id="radioSim" onClick = "habilitacao()"> Sim</label>
        <input type="radio" name="faz_exer" value="não" onClick = "habilitacao()"> Não</label>  	
</div>
 

<div class="form-group col-md-3">
	
 <label for="exer_qual">Quais?</label>
 <input type="text" class="form-control" name="exer_qual" id = "quais" placeholder="corrida, caminhada..." required disabled>

</div>

<div class="form-group col-md-3">
  
    <div class="form-group">
      	<label for="horas_sono">Quantas horas dorme por dia?</label>
      	<select class="form-control">
          <option name="horas_sono"value="4 horas">4hrs</option>
          <option name="horas_sono" value="5 horas">5hrs</option>
          <option name="horas_sono" value="6 horas">6hrs</option>
          <option name="horas_sono" value="7 horas">7hrs</option>
		  <option name="horas_sono" value="8 horas ou mais">+8hrs</option>       					
      	</select>     
   </div>
  
</div>
</div>
<br/><br/> 

<h2>&nbsp;&nbsp;Histórico médico</h2>
<hr/>  
<div class="row">
<div class="form-group col-md-3">
  <label for="problema_familia">Possui alguém com problemas cardíacos na família?</label>  
		<br/><br/>
		<input type="radio" name="problema_familia" value="sim"> Sim</label>   
        <input type="radio" name="problema_familia" value="não"> Não</label> 	
</div>

<div class="form-group col-md-5">
  <label for="familia_qual">Quem?</label>
  <input type="text" class="form-control" name="familia_qual" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-3">
  <label for="doenca">Possui alguma doença?</label>
		<br/><br/>
		<input type="radio" name="doenca" value="sim"> Sim</label>
        <input type="radio" name="doenca" value="não"> Não</label> 
</div>

<div class="form-group col-md-5">
  <label for="doenca_qual">Qual?</label>
  <input type="text" class="form-control" name="doenca_qual" placeholder="anemia, " required>
</div>
</div>
 
<div class="row">
<div class="form-group col-md-3">
  <label for="cirurgia">Já fez alguma cirurgia?</label> 
		<br/><br/>
		<input type="radio" name="cirurgia" value="sim"> Sim</label>
        <input type="radio" name="cirurgia" value="não"> Não</label>
</div>

<div class="form-group col-md-5">
  <label for="cirurgia_qual">Qual?</label>
  <input type="text" class="form-control" name="cirurgia_qual" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-2">
  <label for="medicamento">Faz uso de medicamentos?</label>
		<br/><br/>
		<input type="radio" name="medicamento" value="sim"> Sim</label>
        <input type="radio" name="medicamento" value="não"> Não</label>
</div>

<div class="form-group col-md-2">
  <label for="medi_qual">Quais?</label>
  <input type="text" class="form-control" name="medi_qual" required>
</div>

<div class="form-group col-md-2">
    <div class="form-group">
      	<label for="medi_quant">Quantidade?</label>
      	<select class="form-control">
          <option name="medi_quant" value="1">1</option>
          <option name="medi_quant" value="2">2</option>
          <option name="medi_quant" value="3">3</option>
          <option name="medi_quant"value="4">4</option>
		  <option name="medi_quant"value="+4">+ de 4</option>       					
      	</select>     
   </div>
</div>
</div> 
</div>

<div class="row">
<div class="form-group col-md-10">
  <label for="estresse">Qual o seu nível de estresse durante o dia?</label>
  <input type="text" class="form-control" name="estresse" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-2">
  <label for="dor">Sente alguma dor que impeça sua tarefas diárias?</label>
   <br/><br/>
   <input type="radio" name="dor" value="sim"> Sim</label>
   <input type="radio" name="dor" value="não"> Não</label>
</div>


<div class="form-group col-md-2">
  <label for="dor_qual">Qual?</label>
  <input type="text" class="form-control" name="dor_qual" required>
</div>

<div class="form-group col-md-2">
  <label for="dor_local">Em que local?</label>
  <input type="text" class="form-control" name="dor_local" required>
</div>
</div> 

<div class="row">
<div class="form-group col-md-3">
  <label for="alergia">Possui alguma alergia?</label> 
		<br/><br/>
		<input type="radio" name="alergia" value="sim"> Sim</label>
        <input type="radio" name="alergia" value="não"> Não</label>
</div>

<div class="form-group col-md-5">
  <label for="alergia_qual">Qual?</label>
  <input type="text" class="form-control" name="alergia_qual" required>
</div>
</div>
</div>

<div class="row">
<div class="form-group col-md-3">
  <label for="restri_exercicio">Possui restrição a prática de exercícios?</label> 	
		<br/><br/>
		<input type="radio" name="restri_exercicio" value="sim"> Sim</label>
        <input type="radio" name="restri_exercicio" value="não"> Não</label>
</div>


<div class="form-group col-md-5">
  <label for="restric_qual">Qual?</label>
  <input type="text" class="form-control" name="restric_qual" required>
</div>
</div>
</div>  

<br/>
<h2>&nbsp;&nbsp;Objetivos com relação a atividade física</h2>
<hr/>  
<div class="row">
<div class="form-group col-md-10">
    			<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo1">
        				<input type="checkbox" class="form-check-input" name="objetivo1" value="Estética">Estética</label>
    			</div>
    			<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo2">
        				<input type="checkbox" class="form-check-input" name="objetivo2" value="Lazer">Lazer</label>
    			</div>
    			<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo3">
        				<input type="checkbox" class="form-check-input" name="objetivo3" value="Terapêutico">Terapêutico</label>
    			</div>
				<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo4">
        				<input type="checkbox" class="form-check-input" name="objetivo4" value="Cond. Físico">Cond. Físico</label>
    			</div>
				<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo5">
        				<input type="checkbox" class="form-check-input" name="objetivo5" value="Convivio Social">Convivio Social</label>
    			</div>
				<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo6">
        				<input type="checkbox" class="form-check-input" name="objetivo6" value="Emagrecimento">Emagrecimento</label>
    			</div>
				<div class="form-check form-check-inline">
      				<label class="form-check-label" for="objetivo7">
        				<input type="checkbox" class="form-check-input" name="objetivo7" value="Hipertrofia">Hipertrofia</label>
    			</div>				

	<br/><br/><br/>
	
  <div id="actions" class="row" align="right">
    <div class="col-md-12">
      <button class="btn btn-success btn-xs" type="submit" name="enviar"> Salvar <img src="img/ok_icon.png" alt="Academia" width="25"></button>
      <a href="buscar.php"><button type="button" class="btn btn-danger btn-xs"> Calcelar <img src="img/cancel_icon.png" alt="Academia" width="18"></button><a/>
    </div>
  </div>				
				
</form>
</div>  
</div>

<!------------ MÁSCARA FORM ------------->
 <script type="text/javascript">
    $("#altura").mask("0.00 m");
	$("#peso").mask("00.00 kg");
 </script>

	</body>
	
</html>