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
        href="<?php echo base_url(); ?>static/css/adocao.css" />
		<link href='http//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'> <!--fonte-menu-->
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>		




	</head>	

	
<body>
<header>	
		
<div class="conteudo-menu">
<div class="menu2">
	<ul>
		
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/entrar">Login<img src="<?php echo base_url(); ?>static/img/user.png" alt="icone" /> </a></li>
		<li><a href="#">Cadastre-se </a></li>
	<ul>
<div class="clear"></div>
</div>
</div>
	<div class="menu">
		<div class="l-triangle-top"></div>
		<div class="l-triangle-bottom"></div>
		<div class="rectangle">
			<ul>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota1" >home <img src="<?php echo base_url(); ?>static/img/home1.png" alt="icone" /> </a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota5">Adote<img src="<?php echo base_url(); ?>static/img/man.png" alt="icone" /> </a></li>
				<li ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota6" style="width:130px">apadrinhe<img src="<?php echo base_url(); ?>static/img/chovendo.png" alt="icone" /></a></li>	
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota3" >Ajude<img src="<?php echo base_url(); ?>static/img/ajude3.png" alt="icone" class="icone"/></a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota2">Sobre<img src="<?php echo base_url(); ?>static/img/sobre.png" alt="icone" class="icone"/></a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota4">Contato<img src="<?php echo base_url(); ?>static/img/contato.png" alt="icone" class="icone"/></a></li>
			</ul>
						<a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota1"><div class="logo"></div></a>
		</div>
		<div class="r-triangle-top"></div>
		<div class="r-triangle-bottom"></div>
	</div>
</header>
	
	
<main>
<div class="formulario">
<h2> Administrador</h2>
<br>
    	<br>

	
		
        <form action="/index.php/ong/doPost" method="POST">
    		<h2> Adicionar um novo animal </h2>
		<br><br>
		<label>
		Nome:* <input type="text" size="15" name="nome" required >
		</label>
		<label>	Idade:* <input type="number" size="15" maxlength="2" name="idade" required> </label><br>
		<label>Raça: <input type="text" size="15" name="raca" required></label>
		<label>Características:* <input type="textarea" size="15" name="caracteristicas" required > <br></label>
		slecione adotar ou apadrinhar<input type="text" name="cat"/>
	    	<p> * Administrador, por favor preencha todos os campos de cadastramento do animal. </p>
		<br>
	<input type="submit" value="Cadastrar">
	
		</form>
		
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