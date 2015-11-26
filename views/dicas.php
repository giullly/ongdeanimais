
    
    <!DOCTYPE html>

	<head>
		<meta charset="UTF-8">
		<title> DICAS </title>
	
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
				echo  "<li><a href='https://ongdeanimais-giully.c9.io/index.php/login/logout'> Sair </a></li>";
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
		<h1> Dicas </h1>
		<p> Aqui você encontra as melhores dicas de como cuidar do seu pet.</p>
		<br>
		<hr>
		<br>
	<div class="textoadotar">
<ul>
	
	<li>Um amigo deve levar só alegrias. Antes de levar um animalzinho para casa, tenha certeza de que ele não será motivo de discórdia e brigas. Caso contrário, todo mundo vai sofrer, principalmente ele.</li>
	<li>Um animal bem alimentado é um amigo feliz. Forneça alimentos apropriados, de acordo com a espécie e a idade do animal. Os adultos devem ser alimentados duas vezes ao dia, e os filhotes de quatro a seis vezes ao dia. Mantenha sempre a água limpa e fresca à disposição. Recolha os restos de alimentos do comedouro do animal, evitando, assim a proliferação de ratos, baratas e formigas.</li>
	<li>Seu amigo também precisa ir ao médico. Ao desmamar, ele deve visitar o médico veterinário para desverminar e receber as vacinas. Os filhotes devem ser vacinados com 2, 3 e 4 meses de idade, e os adultos anualmente, com vacina contra a raiva e doenças próprias da espécie. Providencie a vermifugação do seu animal seguindo as orientações veterinárias a esse respeito. E não se esqueça de levá-lo para fazer exercícios.</li>
	<li> Você tem gato? Não deixe de colocar rede de proteção </li>	
	<li> Alimentos proibidos para cães: Chocolate, pão, suco</li>
	<li> Alimentos proibidos para gatos: Carne, alho, chocolate</li>
	<li>O animal castrado vive melhor e fica mais dócil. Todo proprietário pode levar seu animal para castração, seja ele macho ou fêmea, de raça ou não. Assim, você contribui para diminuir a superpopulação de animais na cidade.</li>
	<li> O cão deve ter abrigo confortável, protegido do sol, da chuva e do vento. Para evitar algumas doenças, recomenda-se um banho por mês. Já os felinos são animais muito limpos e não precisam tomar banho frequentemente. E lembre-se: todo proprietário deve recolher as fezes de seu animal nas ruas, nas calçadas e nos parques. É uma atitude de cidadania e obrigatória por lei.</li>
	
</ul>
<br>	
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