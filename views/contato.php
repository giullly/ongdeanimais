<!DOCTYPE html><head>
		<meta charset="UTF-8">
		<title> Contato - Ong DVA </title>
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
			     <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/estilo.css" />
		<link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/main.css" />
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/contato.css" />
		
     
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
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/cadas">Cadastre-se </a></li>
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
		<br>
		
			<h1> Entre em contato conosco </h1>
	<hr>
	<div class="position">
		<h2>ONG DVA</h2>
		<p> Av. Bartolomeu de Gusmão, 869 Cjt 23</p>
		<p> Bairro Aparecida </p>
		<p> Telefone: (13)3021-9917</p>
	<br>
		

					<span class="geo" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m10!1m3!1d914.2936023963449!2d-46.66609574426649!3d-23.562174878671073!2m1!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59d471d9d75d%3A0x9768023ecba9438e!2sR.+Haddock+Lobo%2C+1232+-+Cerqueira+C%C3%A9sar%2C+S%C3%A3o+Paulo+-+SP%2C+01414-002!5e0!3m2!1spt-BR!2sbr!4v1411080446866" width="300" height="200"></iframe>

	</span>
	</div>	
	
		
		<br>
	 <form action="/index.php/controller/doPost" method="POST">
		<p>
		    
		    
		    
		
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label>Nome:*<br> 
				<input type="text" name="nome" id="nome" size="40"  maxlength="25" autocomplete="on" required placeholder="Digite seu nome(Entrar via teclado alt+n)" tabindex="1" Accesskey="n" > 
			</label>
		</p>	

		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label> Telefone: <br>
				<input type="tel" name="telefone" id="telefone" size="12" maxlength="40" placeholder="(Via teclado alt+t)" tabindex="2" Accesskey="t">
			</label>
		</p>

		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label>E-mail:* <br>
				<input type="email" name="email" id="email" size="40" required placeholder="Digite seu e-mail(Entrar via teclado alt+l)" tabindex="3" Accesskey="l">
			</label>
		</p>
		
		
		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label> Assunto:* <br>
				<input type="text" name="assunto" id="tt" maxlength="30" size="40" placeholder="Digite o assunto da mensagem (Via teclado alt+a)" tabindex="6" required Accesskey="a">
				</label>

		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label>Mensagem:*<br>
				<textarea name="mensagem" id="mensagem"  rows="5" cols="31" placeholder="Digite o assunto da mensagem (Entrar via teclado alt+m)" tabindex="7" required Accesskey="m"></textarea>
			</label>
		</p>

		<input type="submit" value="Enviar" >
		<input type="reset" value="Limpar">
	</form>
	<br>
	<br>
	<p> * Estes campos são obrigatórios </p>
		
		
		
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