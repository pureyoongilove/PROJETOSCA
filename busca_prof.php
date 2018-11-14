<?php
include ("conexao.php");
//session_start();
if(isset($_SESSION['adm'])){
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
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
</style>
	 
</head>

	<body>
		<!---------------------------- NAVBAR ---------------------------->
		<div class="topnav" id="myTopnav">
				<a>
				  <img src="img/logoNav.png" alt="logo" style="width:20px">
				</a>
			<a href="indexAdm.php" class="active">Home</a>			
			<a href="busca_prof.php">Gerenciar professores</a>
			<a href="cadProf.php">Cadastrar professores</a>
			
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">			
				<a href="sair.php"><img src="img/sair_icon.png" alt="Academia" width="25"> Sair</a>
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
	
	
<!---------------------------- CAIXA DE BUSCA E BOTÕES ---------------------------->
	<div class="serives-agile py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="form-group col-md-6">
				  <form class="example" action="buscaProfRes.php" style="margin:auto;max-width420px">
					<input name="prof" type="text" placeholder="Procurar...">
					<button type="submit"><img src="img/search_icon.png" alt="Academia" width="25"></button>
				  </form> 
				</div>
				<!--BOTÕES-->
				<div class="form-group col-md-6">
				  <div class="container" align="right">
					<a href="cadProf.php"><button type="button" class="btn btn-dark">Adicionar professor <img src="img/adduser_icon.png" alt="Academia" width="25"></button></a>
					<a href="indexAdm.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
		          </div>
				</div>						 		
			</div>								
        </div>
	</div>	
		
		<!---------------------------- LISTA CLIENTES ---------------------------->
		
		<div style="overflow-x:auto;">
		<div class="container">         					  
            <table class="table table-dark table-hover">
                <thead class="thead-dark">
                  <tr>                  
                    <th>NOME</th>					
                    <th>EMAIL</th>
					<th>TELEFONE</th>	
					<th></th>
					<th></th>
					<th></th>
                  </tr>
                </thead>
                <tbody>
    <?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
                echo "<div class='alert alert-success alert-dismissible fade show'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Dados removidos com sucesso!</strong> Os dados foram removidos.
					</div>";            
            }else{
                echo "<div class='alert alert-danger alert-dismissible fade show'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Erro na remoção de dados!</strong> Os dados não foram removidos.
					</div>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<div class='alert alert-success alert-dismissible fade show'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Alteração feita com sucesso!</strong> Os dados foram alterados.
					</div>";             
            }else{
                echo "<div class='alert alert-danger alert-dismissible fade show'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Erro na alteração de dados!</strong> Os dados não foram alterados.
					</div>";
            }
        } 
    ?>
    
        <?php 
            //Estabelece a conexao com o mysql
           /* $hostname = "localhost";
            $user = "root";
            $password = "";
            $database = "academia";
            $conexao = mysqli_connect($hostname,$user,$password,$database);
            if( !$conexao ){
                echo "Ops.. Erro na conexão.";
                exit;
            }*/
        //include ("conexao.php");

$conexao = $_SESSION['con'];
            //Carrega os dados
            $sql = "SELECT * FROM professor ORDER BY `nome` ASC";
            $consulta = mysqli_query($conexao, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                //echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['email']. "</td>";
                echo "<td>" .$dados['telefone']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='edita_prof.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='rg' type='hidden' value='" .$dados['rg']. "'>";
                echo "<input name='cargo' type='hidden' value='" .$dados['cargo']. "'>";
                echo "<input name='endereco' type='hidden' value='" .$dados['endereco']. "'>";
                
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                echo "<button type='submit' class='btn btn-success'> Editar <img src='img/edit_icon.png' alt='Academia' width='22'></button>";
                echo "</form>";
                echo "</td>";
                //Formulario para vizualizar o usario
                echo "<td>";
                echo "<form action='visualizar_prof.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button type='submit' class='btn btn-primary'> Visualizar <img src='img/view_icon.png' alt='Academia' width='22'></button>";
                echo"</form>";

                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='remove_prof.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button type='submit' class='btn btn-danger'> Excluir <img src='img/del_icon.png' alt='Academia' width='22'></button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";

            }
        ?>
   </tbody>
              </table>            
        </div>
	</div>
	
		<script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
		
	</body>
</html>
