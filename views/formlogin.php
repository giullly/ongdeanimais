<!DOCTYPE html><head>
		<meta charset="UTF-8">
		<title> Contato - Ong DVA </title>
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		
		<link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/estilo.css" />
		<link rel="stylesheet" type="text/css" 
    	 	href="<?php echo base_url(); ?>static/css/main.css" />
		<link rel="stylesheet" type="text/css" 
    		 href="<?php echo base_url(); ?>static/css/login.css" />
     
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
</head>

<body>
<header>	 
			
	<div class="conteudo-menu">
	<div class="menu2">
		
	<ul>
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/entrar">Login <img src="<?php echo base_url(); ?>static/img/user.png" alt="icone" /></a></li>
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/cadastro">Cadastre-se </a></li>
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
<br>

<div class="caixas">
<div class="caixa">		

		<h1> L<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />gin </h1>
	
	<form action="/index.php/login/auth" method="Post">
<p>
	<label>
		Login : <input type="text" name="login" required>
	</label>
</p>
<br>
<p>
	<label>
		Senha: <input type="password" name="pass" id="senha" placeholder="Digite sua senha" required>
	</label>
</p>
<br>
<p>
	<input type="submit" value="Entrar" id="Entrar">
</p>
</form>
<br>

</div>
<div class="caixa">	

	<h1>Cadastre-se</h1>
		<br>
		<p>Ainda não possui um cadastro?</p> 
		<p>Cadastre-se, é rapidinho!</p>
		<p>Venha fazer parte dessa família também!</p>
		<br>
		<p>
	<a href="https://ongdeanimais-giully.c9.io/index.php/login/cadastro"><button>Quero me cadastrar</button></a>
	</p>
	</div>
	</div>
	
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