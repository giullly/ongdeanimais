<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	
	<title> ADOTE </title>
	
		<link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/adocao.css" />
         <link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/main.css" />
         <link rel="stylesheet" type="text/css" 
        	href="<?php echo base_url(); ?>static/css/estilo.css" />
        	
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
</head>
	
<body class="tudo">
		
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
					echo  "<li><a href='https://ongdeanimais-giully.c9.io/index.php/login/logout'> sair</a></li>";
		        }           
			?>
		<ul>
</div>

<header>	 
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
		<h1> Escolha seu novo amigo, adote: </h1>
		<br>
		<hr>
		<br>
		<div class="textoadote">
			<p>Todos os animais que estão no abrigo foram resgatados das ruas por abandono (muito debilitados); ou em casos de 
			atropelamento; ou foram resgatados por denúncia de maus tratos. Não medimos esforços para devolver às suas vidas, fé no
			ser humano.</p>
			<p> Providenciamos toda assistência veterinária necessária, boa alimentação e muito carinho.Caso você se interesse 
			em adotar algum dos animaizinhos, entre em contato com a gente. Caso não possa adotar, pense na possibilidade de “apadrinhar”, 
			que é uma forma de adoção à distância.</p>
			<p>Eles merecem uma nova chance!Agradecemos seu interesse em adotar um cão sem dono.</p>
			<p>Mas, se você tem interesse em adotar um dos nossos animais, precisamos saber um pouco mais de você, pois do ponto de vista do animal, 
			ser abandonado pelo amigo é muito doloroso… e eles já sofreram isso uma vez e não queremos que isso se repita. Eles não merecem ser 
			tratados com desprezo.</p>
			</div>
	<br>	

	<?php
	
    foreach($lista as $l){
       	echo '<div class="animal" >';
	   	echo '<div class="img"></div>';	
       	echo "<p><b> Nome:</b>". $l->nome."</p>";
       	echo "<p><b> Idade:</b>". $l->idade."</p>";
       	echo "<p><b> Raça:</b>". $l->raca."</p>";
       	echo "<p><b> Comportamento:</b>". $l->comportamento."</p>";
	   	echo "<br>";
	   	$cdAnimal = $l->cd;
	   	echo "<form method='get' action='/index.php/login/verifica'>";
    		echo "<input type='hidden' name='cdAnimal' value='$cdAnimal'>";
	   		echo "<input type=submit value='Quero Adotar ❤' />";
	   	//$cdAnimal = $l->cd;
	   	//$this->session->set_userdata("_CDANIMAL", $cdAnimal);
	   	echo "</form>";
	    echo "<br>";
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