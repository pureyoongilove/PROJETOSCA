<!DOCTYPE html>
<html lang="pt-br">

<head>

	<title> SCA </title>
	<link rel="icon" type="imagem/png" href="img/logo.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!------- estilo NAVBAR ------->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!------- estilo LOGIN ------->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Simple User Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, SonyErricsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	
</head>

	<body id="login">

		<!---------------------------- NAVBAR ---------------------------->
		<div class="topnav" id="myTopnav">
				<a>
				  <img src="img/logoNav.png" alt="logo" style="width:20px">
				</a>
			<a href="index.html" class="active">Home</a>			
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			<div class="topnav" id="iconNav">
				<a href="#"><img src="img/user_icon.png" alt="Academia" width="25"> Login </a>
				<!-- <a href="#"><i class="fa fa-sign-out"></i> Sair </a> -->
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
	
	<!---------------------------- FORMULARIO DE LOGIN ---------------------------->
	<br/><br/><br/><br/>
	<div class="form-box">
    <div class="head"><img src="img/logoLogin.png" alt="logo" style="width:170px"></div>        
    <form  id="login-form" method="post" action="verificar.php">
        <div class="form-group">
          <label class="label-control">
            <span><img src="img/login1_icon.png" alt="Academia" width="18">  Digite seu CPF</span>
          </label>
          <input type="text" name="user_login" class="form-control" />
        </div>
        <div class="form-group">
          <label class="label-control">
            <span><img src="img/login2_icon.png" alt="Academia" width="18">  Digite sua senha</span>
          </label> 
          <input type="password" name="user_senha" class="form-control" />
        </div>
        <input type="submit" value="Login" class="btn"/>
    </form>
  </div>
  
  <!---------------------------- SCRIPT LOGIN ---------------------------->
  <script>
  $('.form-group input').on('focus blur', function (e) {
  $(this).parents('.form-group').toggleClass('active', (e.type === 'focus' || this.value.length > 0));
  }).trigger('blur');
  </script>
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
	<div class="footer">
		<p>Sistema para Controle de Academia - 2018</p>
	</div>
	
	</body>
	
</html>
