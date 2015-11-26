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
		<h1>Cadastre-se </h1>
	<hr>
	
 	<form action="/index.php/login/doPOST2" method="Post">
   		<p> 
   			<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone"   /> <label> Login: <br>
      		<input type="text" name="login" tabindex="1"  maxlength="10" required ></label>Escreva um login com até 10 caracteres.
      	</p>
      
      <p>
       	  <img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone"  />  <label>Senha: <br>
      	  <input type="password" name="pass" tabindex="2"></label><br>
      </p>
	  
	  <p>
	  	  <img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label>Nome:*<br> 
	 	 <input type="text" name="nome" id="nome" size="40"  maxlength="25" autocomplete="on" required placeholder="Digite seu nome(Entrar via teclado alt+n)" tabindex="3" Accesskey="n" > 
		  </label>
	  </p>

		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label> Telefone: <br>
			<input type="tel" name="telefone" id="telefone" size="12" maxlength="40" placeholder="(Via teclado alt+t)" tabindex="4" Accesskey="t">
		</label>
		</p>

		<p>
		<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" />	<label>E-mail:* <br>
			<input type="email" name="email" id="email" size="40" required placeholder="Digite seu e-mail(Entrar via teclado alt+l)" tabindex="5" Accesskey="l">
		</label>
		</p>

<br>

	<p>
	<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" /><label >Estado:* <br><input type="text" size="15" name="estado" maxlength="2" tabindex="6" placeholder="Digite a sigla do seu estado(Entrar via teclado alt+e)" required Accesskey="e"> </label>
	</p>
	<br>
	<p>
	<img src="<?php echo base_url(); ?>static/img/pata.png" alt="icone" /><label>Cidade:* <br><input type="text" size="15" name="cidade"  placeholder="Digite o nome de sua cidade(Entrar via teclado alt+c)" tabindex="7" required Accesskey="c"> </label>
	</p>
	<br>
	<input type="submit" value="Cadastrar" tabindex="8">
  
</form>
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


