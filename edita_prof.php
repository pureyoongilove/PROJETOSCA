<?php
session_start();
if(isset($_SESSION['adm'])){
	//echo"bem vindo $_SESSION[adm]";
}else{header("location:login.php");}
?>

<html>
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
	 
	<style>
form#formulario {
    margin: auto;
    width: 98%;
    padding: 10px;
}

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
			<a href="buscaProfRes.php">Gerenciar professores</a>
			<a href="cadProf.php">Cadastrar professores</a>
			
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">			
				<a href="sair.php"><i class="fa fa-sign-out"></i> Sair</a>
			</div>	
			</a>
	    </div>
		
		<!---------------------------- SCRIPT NAVBAR ---------------------------->
	<br/>
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
	
        <?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $rg  = filter_input(INPUT_POST, 'rg');
            //$sexo = filter_input(INPUT_POST, 'sexo');
            $endereco = filter_input(INPUT_POST, 'endereco');
			$cargo = filter_input(INPUT_POST, 'cargo');


        ?>
		
		<h2>&nbsp;&nbsp;Editar professor <img src="img/user_edit.png" alt="Academia" width="45"></h2>
		<hr>
        <form id="formulario" action="salva_prof.php" method="post">
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row">          		
            <div class="form-group col-md-6">
			<label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control">
            </div>
			<div class="form-group col-md-4">
			<label> Email: </label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
            </div>
			<div class="form-group col-md-2">
			<label> CPF: </label>
            <input type="text" name="cpf" value="<?php echo $cpf; ?>" class="form-control">
            </div>
			</div>
			<br/>
            
			<div class="row">
			<div class="form-group col-md-2">
			<label> RG: </label>
            <input type="text" name="rg" value="<?php echo $rg; ?>" class="form-control">
            </div>
			<div class="form-group col-md-3">
			<label> Telefone: </label>
            <input type="text" name="telefone" value="<?php echo $telefone; ?>" class="form-control">
            </div>
			<div class="form-group col-md-4">
			<label> Endereço: </label>
            <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="form-control">
			</div>
			<div class="form-group col-md-3">
			<label> Cargo: </label>
            <input type="text" name="cargo" value="<?php echo $cargo; ?>" class="form-control">
            </div>
			</div>
			
			<br/>
			
			<div id="actions" class="row" align="right">
			<div class="col-md-12">
			<button type="submit" class="btn btn-success btn-xs"> Salvar <span class="fa fa-check"></span></button>
			<a href="busca_prof.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
			</div>
			</div>
			
        </form>
    </body>
</html>
