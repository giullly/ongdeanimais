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
<h2> Você escolheu adotar: Miguel </h2>
<br>
    	<img src="<?php echo base_url(); ?>static/img/miguel.png" alt="gatomiguel">
    	<br>

	
		<p>	Nome: Miguel </p>
		<p> Idade: 9 anos </p>
		<p> Raça: Siamês </p>
		<p> Características: Dócil, quieto, acima do peso </p>
	 <form action="/index.php/controller/sucesso2" method="POST"> 
		<h2> Preencha o formulário abaixo e entraremos em contato </h2>
		<br><br>
		<label>
		Nome:* <input type="text" size="15" name="nome" required >
		</label>
		<label>	Sobrenome:* <input type="text" size="15" name="sobrenome" required> <br></label><br>
		<label>E-mail:* <input type="email" size="15" name="email" required></label>
		<label>Telefone:* <input type="tel" size="15" name="telefone" required > <br></label>
		<label>	<br>Estado:* <input type="text" size="15" name="estado" required > </label>
		<label>Cidade:* <input type="text" size="15" name="cidade" required > <br></label>
	    <br>Por que você decidiu adotar Miguel?<br><label><textarea rows="5" cols="45" required > </textarea></label>
	    <br>
	    	<p> * Estes campos são obrigatórios </p>
		<br>
	<input type="submit" value="Confirmar adoção">
	
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