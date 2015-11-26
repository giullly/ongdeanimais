<!DOCTYPE html>

	<head>
		<meta charset="UTF-8">
		<title> Sobre - Ong DVA </title>
		
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		
		<link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/administrador.css" />
		<link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/main.css" />
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/adocao.css" />
        
		<link href='http//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>		
	</head>	
	
<body>
	
<header>	
   
	<div class="menu">
		<div class="l-triangle-top"></div>
		<div class="l-triangle-bottom"></div>
		<div class="rectangle">
			<ul>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/admincadastro" >Cadastrar animal </a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/adminadotar">Visualizar Adoção</a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/listar2">Mensagens Recebidas</a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/logout">Sair</a></li>
			</ul>
				<a href="https://ongdeanimais-giully.c9.io/index.php/controller/index"><div class="logo"></div></a>
		</div>
		<div class="r-triangle-top"></div>
		<div class="r-triangle-bottom"></div>
	</div>
	
</header>
	
<main>
<div class="formulario">
<h1> Administrador</h1>
<br>
        <form action="/index.php/ong/doPost" method="POST" enctype=”multipart/form-data” name="cadastrar">
    	<h2> Adicionar um novo animal</h2>
		<br>
		<br>
		<label> 
			Nome:*  <input type="text" size="15" name="nome" required >
		</label> 
		<label> 
			Idade:* <input type="number" size="15" maxlength="2" name="idade" required> 
		</label><br>
		<br>
		<label>
			 Raça: <input type="text" size="15" name="raca" required>
			 </label>
		<label> 
			Características:* <input type="textarea" size="15" name="comportamento" required ><br>
		</label><br>
		<br>
    		Especie: <select name="especie"> 
        	<option value="gato">gato</option> 
        	<option value="cachorro">cachorro</option> 
    </select> 
	    <p> * Administrador, por favor preencha todos os campos de cadastramento do animal. </p>
		<br> 
		<input type="submit" value="Cadastrar" name="submit">
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