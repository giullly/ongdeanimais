<!DOCTYPE html>

	<head>
		<meta charset="UTF-8">
		<title> Sobre - Ong DVA </title>
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		
		<link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/estilo.css" />
		<link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/main.css" />
        <link rel="stylesheet" type="text/css" 
    		href="<?php echo base_url(); ?>static/css/sobre.css" />
         <link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/contato.css" />
        
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'> <!--fonte-menu-->
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>		
	</head>	

<body>
<header>	
		
<div class="conteudo-menu">
<div class="menu2">
		<ul>
		<?php  
	        if(!isset($_SESSION["_LOGIN"])){
	         	echo  "<li><a href='https://ongdeanimais-giully.c9.io/index.php/login/entrar'>Login </li>";
				echo  "<li><a href='https://ongdeanimais-giully.c9.io/index.php/login/cadastro'> Cadastre-se </a></li>";
	        }else{
	        	$login = $_SESSION["_LOGIN"];
	            echo  "<li class='welcome'>Bem vindo $login </li>";
				echo  "<li><a href='https://ongdeanimais-giully.c9.io/index.php/login/logout'> Sair </a></li>";
	        }             
		?>
	<ul>
		
<div class="clear"></div>
</div>
</div>
	<div class="menu">
		<div class="l-triangle-top"></div>
		<div class="l-triangle-bottom"></div>
		<div class="rectangle">
			<ul>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/index" >home <img src="<?php echo base_url(); ?>static/img/home1.png" alt="icone" /> </a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/ong/adote">Adote<img src="<?php echo base_url(); ?>static/img/man.png" alt="icone" /> </a></li>
				<li ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota6">Dicas<img src="<?php echo base_url(); ?>static/img/chovendo.png" alt="icone" /></a></li>	
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota3" >Ajude<img src="<?php echo base_url(); ?>static/img/ajude3.png" alt="icone" class="icone"/></a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota2">Sobre<img src="<?php echo base_url(); ?>static/img/sobre.png" alt="icone" class="icone"/></a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota4">Contato<img src="<?php echo base_url(); ?>static/img/contato.png" alt="icone" class="icone"/></a></li>
			</ul>
				 <a href="https://ongdeanimais-giully.c9.io/index.php/controller/index"><div class="logo"></div></a>
		</div>
		<div class="r-triangle-top"></div>
		<div class="r-triangle-bottom"></div>
	</div>
</header>
	
	
<main>

		
		<h1> Sua solicitação foi enviada com sucesso!</h1>
		<hr>
		<div class="position2">
		<img src="<?php echo base_url(); ?>static/img/sucesso.jpg" alt="icone" class="icone"/>
	</span>
	</div>	
		<br>
		<p class="text">
     	Retornaremos o mais rápido possível!
 		<br>
 		<p>	Boa Sorte!</p>
 		<br>
 		<br>
 		<a href="https://ongdeanimais-giully.c9.io/index.php/controller/index"><button class="botao">Voltar</button></a>
		</p>

</main>
	
	<footer>	
		<h4>ONG DVA</h4>
		<div class="menu_rodape">	
		
		<h4> Av. Bartolomeu de Gusmão, 869 Cjt 23</h4>
		<h4> Bairro Aparecida </h4>
		<h4> Telefone: (13)3021-9917</h4>
		</div>
		
		<div class="icones">
		<img src="<?php echo base_url(); ?>static/img/twitter.png" alt="twitter">
		<img src="<?php echo base_url(); ?>static/img/facebook.png" alt="facebook">
		<img src="<?php echo base_url(); ?>static/img/youtube.png" alt="youtube">
		</div>

</footer>

</body>
</html>		