<?php
session_start();
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
	<!------- estilo CARROCEL ------->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<style type="text/css">
		A#social:link {text-decoration:none;color:#333;}
		A#social:visited {text-decoration:none;color:#000;}
		A#social:active {text-decoration:none;color:#5d0a0a;}
		A#social:hover {text-decoration:none;color:#999999;}
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
		
		<!---------------------------- CAROUSEL ---------------------------->
<div id="demo" class="carousel slide" data-ride="carousel">

  		<ul class="carousel-indicators">
    		<li data-target="#demo" data-slide-to="0" class="active"></li>
    		<li data-target="#demo" data-slide-to="1"></li>
    		<li data-target="#demo" data-slide-to="2"></li>
  		</ul>
  
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="img/gym1.jpg" alt="Academia" width="1100" height="500">
    		</div>
    		<div class="carousel-item">
      			<img src="img/gym2.jpg" alt="Academia" width="1100" height="500">
    		</div>
    		<div class="carousel-item">
      			<img src="img/gym3.jpg" alt="Academia" width="1100" height="500">
    		</div>
  		</div>
  
  		<a class="carousel-control-prev" href="#demo" data-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		</a>
  		<a class="carousel-control-next" href="#demo" data-slide="next">
    		<span class="carousel-control-next-icon"></span>
  		</a>
	</div>		

		<!---------------------------- BLOCOS DE TEXTO/IMAGEM ---------------------------->
<div class="serives-agile py-5 border-top" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<a>
						<img src="img/promo.png" alt="logo" style="width:70px">
					</a>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Conheça</h5>
					<p>Conheça mais sobre nosso trabalho e instalações.</p>
					<a href="#section1"><button id="botao" class="button button1">Clique aqui</button></a>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-4">
					<a>
						<img src="img/conheca.png" alt="logo" style="width:70px">
					</a>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Promoções</h5>
					<p>Confira as promoções especiais feitas para você.</p>
					<a href="#section2"><button id="botao" class="button button1">Clique aqui</button></a>
				</div>
				<div class="col-md-4 support-grid">
					<a>
						<img src="img/treinamento.png" alt="logo" style="width:70px">
					</a>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Localização</h5>
					<p>Entre em contato e veja nossa localidade.</p>
					<a href="#section3"><button id="botao" class="button button1">Clique aqui</button></a>
				</div>
			</div>
			<br/><br/><br/>
			
			<div id="section1" class="container-fluid bg-link" style="padding-top:70px;padding-bottom:0.5px">
		  <h1>Conheça</h1>
		  <br/>
		  <img src="img/gym5.jpg" class="img-fluid" style="width:355px">
		  <img src="img/gym6.jpg" class="img-fluid" style="width:355px">
		  <img src="img/gym7.jpg" class="img-fluid" style="width:355px">
		  <br/><br/>
		  <h6>Somos uma academia tradicional localizada entre os bairros Flamengo e Botafogo com mais de 20 anos no mercado, 
		  sempre trabalhando para criar relacionamentos mais próximos com nossos alunos e fazer da nossa academia uma extensão da sua casa. 
		  Trabalhar pela saúde e pela melhoria da qualidade de vida das pessoas é a essência da Max Forma. 
		  Aqui você pode realizar todo tipo de atividade e manter-se completamente em forma, trabalhando tanto seu corpo quanto sua mente.</h>
		  <br/><br/>
		  <div class="container">
	  		<br/>
	  		<div class="card">
		    	<div class="card-body">
			      	<h4 class="card-title">Aeróbica</h4>
			      	<p class="card-text">Duração variada • Preço variado • Aulas de ginástica aeróbica.</p>	
					<h4 class="card-title">Zumba</h4>
			      	<p class="card-text">Duração variada • Preço variado • Aulas de Zumba, 2 ou 3 vezes por semana.</p>
					<h4 class="card-title">Musculação</h4>
			      	<p class="card-text">Duração variada • Preço variado • Aulas de musculação com os melhores equipamentos.</p>
					<br/><br/>
					<h5 class="card-title">Venha nos conhecer e faça uma aula experimental!</h5>					
		    	</div>
	  		</div>
		</div>		  
		  </div>    

		<div id="section3" class="container-fluid bg-link" style="padding-top:70px;padding-bottom:0.5px">
		  <h1>Contatos e Localização</h1>
		  <br/>
		<div class="row support-bottom text-left">
			  <div class="col-md-5 support-grid">
		<div>
			<div class="contact-info">
			 <div class="footer-style-w3ls">
				<h4 class="text-dark mb-2"><i class="fa fa-phone" style="font-size:20px;color:black"></i> Telefone</h4>
				<p>(35) 3651-3113</p>
			</div>
			<div class="footer-style-w3ls my-4">
			   <h4 class="text-dark mb-2"><i class="fa fa-facebook-official" style="font-size:20px;color:black"></i> Facebook</h4>
			   <p><a id="social"  href="https://www.facebook.com/academiaparaisofitness/" target="_blank">Academia Fitness Ana Carvalho</a></p>
			</div>
			<div class="footer-style-w3ls">
				<h4 class="text-dark mb-2"><i class="fa fa-map-marker" style="font-size:20px;color:black"></i> Localização</h4>
				<p>Rua Cel. Francisco Granado, 915 - Centro (0,77 km)</p>
				<p>37660-000 Paraisópolis</p>
			</div>
			</div>
		</div>					
			</div>
				
		<div class="col-md-7 support-grid">
	<div id="googleMap" style="width:100%;height:295px;"></div>
		<script>
		function myMap() {
		var mapProp= {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
	 };
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
	   </script>
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>					
		</div>
		</div>
		</div></div></div>
	
		<!---------------------------- SCRIPT CAROUSEL ---------------------------->
		<script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
	
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
	
	<!---------------------------- FOOTER ---------------------------->	
	<div class="footer">
		<p>Sistema para Controle de Academia - 2018</p>
	</div>
	
	</body>
	
</html>
