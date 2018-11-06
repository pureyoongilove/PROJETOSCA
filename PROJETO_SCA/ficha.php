<?php
include ("conexao.php");
//session_start();
if(isset($_SESSION['prof'])|| isset($_SESSION['adm'])){
	//echo"bem vindo $_SESSION[adm]";
}else{header("location:login.php");}
?>

<!DOCTYPE html>

<html>

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

tr {
	background:white;
	color:black;
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
			<a href="cadFicha.php">Criar ficha</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">				
				<a href="#"><i class="fa fa-sign-out"></i> Sair </a> 
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
	
        <h2>&nbsp;&nbsp;Criar Ficha</h2>
		<hr>	
	
	<form action="cad_ficha.php" method="POST">
	<div class="row">
    <div class="form-group col-md-2">
      <label for="nome">Exercicio:</label>
      <input type="text" class="form-control" name="exercicio" required>
    </div>

    <div class="form-group col-md-2">
      <label for="nome">Série:</label>
      <input type="text" class="form-control" name="serie" required>
    </div>

	<div class="form-group col-md-2">
      <label for="nome">Repetição:</label>
      <input type="text" class="form-control" name="repeticao" required>
    </div>

	<div class="form-group col-md-2">
      <label for="nome">Cargo:</label>
      <input type="text" class="form-control" name="carga" required>
    </div>
	
	<div class="form-group col-md-2">
      <label for="bloco">Bloco:</label>
      <select class="form-control" name="bloco">
        	<option>1</option>
        	<option>2</option>
        	<option>3</option>
        	<option>4</option>
      </select>	
    </div>
	</form>  
	
	<div class='container'>
	<br/><br/><br/>
	
<?php
//include ("conexao.php");
$con = $_SESSION['con'];

$id = $_SESSION['id'];

//bloco1

?>
        <?php
        $sqlprof = "SELECT * FROM ficha INNER JOIN professor ON ficha.id_professor = professor.id";
        $sqlFicha = "SELECT * FROM ficha WHERE `ficha`.`bloco` = 1 AND `ficha`.`usuario` = '$id'";
                $fic = mysqli_query($con,$sqlFicha);
                
                if (mysqli_num_rows($fic) >= 1){
                    
                    echo"<table class='table'>";
					echo"<thead class='thead-dark'>";
                    echo"<h2>&nbsp;&nbsp;Bloco 1 Informações</h2>";					
                    echo" <tr><th>Exercicio</th><th>Serie</th><th>Repetição</th><th>Carga</th><th>Bloco</th></tr>";
                 
				 while( $dados_ficha = mysqli_fetch_assoc($fic) ){   
                    echo "<tr>";
               
                echo "<td>" .$dados_ficha['exercicio']. "</td>";
                echo "<td>" .$dados_ficha['serie']. "</td>";
                echo "<td>" .$dados_ficha['repeticao']. "</td>";
                echo "<td>" .$dados_ficha['carga']. "</td>";
                echo "<td>" .$dados_ficha['bloco']. "</td>";
                echo "</tr>";
                     
                    
                }
               echo" </table>";
                }
        ?>
        
        <?php
                //bloco 2
                $sqlFicha2 = "SELECT * FROM ficha WHERE `ficha`.`bloco` = '2' AND `ficha`.`usuario` = '$id'";
                $fic2 = mysqli_query($con,$sqlFicha2);
                
                if (mysqli_num_rows($fic2) >= 1){
					echo "<br/><br/>";
                    echo"<table class='table'>";
					echo"<thead class='thead-dark'>";
                    echo"<h2>&nbsp;&nbsp;Bloco 2 Informações</h2>";
                    echo" <tr><th>Exercicio</th><th>Serie</th><th>Repetição</th><th>Carga</th><th>Bloco</th></tr>";
                
				while( $dados_ficha2 = mysqli_fetch_assoc($fic2) ){   
                     echo "<tr>";
               
                echo "<td>" .$dados_ficha2['exercicio']. "</td>";
                echo "<td>" .$dados_ficha2['serie']. "</td>";
                echo "<td>" .$dados_ficha2['repeticao']. "</td>";
                echo "<td>" .$dados_ficha2['carga']. "</td>";
                echo "<td>" .$dados_ficha2['bloco']. "</td>";
                echo "</tr>";
                     
                    
                }
                echo"</table>";
                }
        ?>
	   
        <?php
                //bloco 3
                $sqlFicha3 = "SELECT * FROM ficha WHERE `ficha`.`bloco` = '3' AND `ficha`.`usuario` = '$id'";
                $fic3 = mysqli_query($con,$sqlFicha3);
                
                if (mysqli_num_rows($fic3) >= 1){
                    echo "<br/><br/>";
                    echo"<table class='table'>";
					echo"<thead class='thead-dark'>";
                    echo"<h2>&nbsp;&nbsp;Bloco 3 Informações</h2>";					
                    echo" <tr><th>Exercicio</th><th>Serie</th><th>Repetição</th><th>Carga</th><th>Bloco</th></tr>";
                
				while( $dados_ficha3 = mysqli_fetch_assoc($fic3) ){   
                     echo "<tr>";
               
                echo "<td>" .$dados_ficha3['exercicio']. "</td>";
                echo "<td>" .$dados_ficha3['serie']. "</td>";
                echo "<td>" .$dados_ficha3['repeticao']. "</td>";
                echo "<td>" .$dados_ficha3['carga']. "</td>";
                echo "<td>" .$dados_ficha3['bloco']. "</td>";
                echo "</tr>";
                     
                    
                }
                echo"</table>";
                }
        ?>
	              
        <?php
                //bloco 4
                $sqlFicha4 = "SELECT * FROM ficha WHERE `ficha`.`bloco` = '4' AND `ficha`.`usuario` = '$id'";
                $fic4 = mysqli_query($con,$sqlFicha4);
                
                if (mysqli_num_rows($fic4) >= 1){
                    echo "<br/><br/>";
                    echo"<table class='table'>";
					echo"<thead class='thead-dark'>";
                    echo"<h2>&nbsp;&nbsp;Bloco 4 Informações</h2>";
                    echo" <tr><th>Exercicio</th><th>Serie</th><th>Repetição</th><th>Carga</th><th>Bloco</th></tr>";   
                
				while( $dados_ficha4 = mysqli_fetch_assoc($fic4) ){   
                     echo "<tr>";
               
                echo "<td>" .$dados_ficha4['exercicio']. "</td>";
                echo "<td>" .$dados_ficha4['serie']. "</td>";
                echo "<td>" .$dados_ficha4['repeticao']. "</td>";
                echo "<td>" .$dados_ficha4['carga']. "</td>";
                echo "<td>" .$dados_ficha4['bloco']. "</td>";
                echo "</tr>";
                     
                    
                }
                echo"</table>";
                }
        ?>             
		
  <br/><br/><br/>
		
  <div id="actions" class="row" align="right">
    <div class="col-md-12"> 
      <button class="btn btn-success btn-xs" type="submit" name="enviar"> Salvar <span class="fa fa-check"></span></button>	
      <a href="buscar.php"><button type="button" class="btn btn-dark btn-xs"> Voltar <span class="fa fa-times"></span></button><a/>
    </div>
  </div>					
			
    </body>
</html>
