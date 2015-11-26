<!DOCTYPE html>

	<head>
		<meta charset="UTF-8">
		<title> ADOTE </title>
	
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/adocao.css" />
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/main.css" />
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/administrador.css" />
        
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
</head>

<body class="tudo">

<header>	

	<div class="menu">
		<div class="l-triangle-top"></div>
		<div class="l-triangle-bottom"></div>
		<div class="rectangle">
			<ul>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/Admincadastro" >Cadastrar animal </a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/adminadotar">Visualizar Adoção</a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/listar2">Mensagens Recebidas</a></li>
				<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/logout">Sair</a></li>
			</ul>
				<a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota1"><div class="logo"></div></a>
		</div>
		<div class="r-triangle-top"></div>
		<div class="r-triangle-bottom"></div>
	</div>
</header>

<main>
		<br>
		<h1> Animais para adoção: </h1>
		<br>
		<hr>
		<br>


	<?php
    foreach($lista as $l){
    	echo '<div class="animal" >';
		echo '<div class="img"></div>';	
		echo "<br>"; 
		echo "<hr>";
		echo "<br>";
        echo "<p><b> Nome:</b>". $l->nome."</p>";
        echo "<p><b> Idade:</b>". $l->idade."</p>";
        echo "<p><b> Raça:</b>". $l->raca."</p>";
        echo "<p><b> Comportamento:</b>". $l->comportamento."</p>";
	    echo "<br>";     
	    echo "<hr>";
	    echo "<br>";  
	    echo "</div>";
    }
?>

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