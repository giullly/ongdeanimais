<!DOCTYPE html>
<head>
		<meta charset="UTF-8">
		<title> Home - Ong DVA</title>
		<link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" />
		     <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/estilo.css" />
		<link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/main.css" />
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/index.css" />
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'><!-- link fonte em cima da imagem-->
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		
       




 <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.8.3.min.js">
        </script>
		 <script type="text/javascript"  src="<?php echo base_url(); ?>static/js/jquery.cycle.all.js">
        </script>

		
		<script>
	$(function(){
				
			$('#slide').cycle({fx:'fade', delay: -2000});
							  
			});

	$(document).ready(function(){
    $('a').click(function(){
        $('a.active').removeClass("active");
        $(this).addClass("active");
    });
});
	 </script>    
 
</head>

	
<body>
		

<header>
			
<div class="conteudo-menu">
<div class="menu2">
	<ul>
		
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/login/entrar">Login <img src="<?php echo base_url(); ?>static/img/user.png" alt="icone" /></a></li>
		<li><a href="https://ongdeanimais-giully.c9.io/index.php/cadastro/cadas">Cadastre-se </a></li>
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
		
		<div id="slide">
		
	<img src="<?php echo base_url(); ?>static/img/11.jpg" alt=""/>
	<img src="<?php echo base_url(); ?>static/img/2.jpg"  alt=""/>
	<img src="<?php echo base_url(); ?>static/img/3.jpg"  alt=""/>
	<img src="<?php echo base_url(); ?>static/img/4.jpg"	alt=""/>
	<img src="<?php echo base_url(); ?>static/img/5.jpg"	alt=""/> 
</div>
		<div class="tabela">
			
			<hr>
			
			
			
			<table >	
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota5"><img src="<?php echo base_url(); ?>static/img/adote1.png" alt="imagem adote" class="imagem" title="adote"></a></th>
						</tr>
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota5" >Como adotar</a></th> 
						</tr>
						<tr>
							<td >Agradecemos seu interesse em adotar um cão sem dono. Prepare-se para uma experiência gratificante! </td>
						</tr>
					</table>
				
					<table>	
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota3"><img src="<?php echo base_url(); ?>static/img/ajude1.png" alt="imagem adote" class="imagem" title="adote"></a></th>
						</tr>
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota3" >Como ajudar</a></th> 
						</tr>
						<tr>
							<td > Ajude-nos a ajudar milhares de animais abandonados. Todo animal merece um lar feliz.</td>
						</tr>
					</table>
			
					<table>	
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota6"><img src="<?php echo base_url(); ?>static/img/ajude.png" alt="imagem adote" class="imagem" title="adote"></a></th>
						</tr>
						<tr>
							<th ><a href="https://ongdeanimais-giully.c9.io/index.php/controller/rota6" >Apadrinhe</a></th> 
						</tr>
						<tr>
							<td >Agradecemos seu interesse em adotar um cão sem dono. Prepare-se para uma experiência gratificante! </td>
						</tr>
					</table>
		</div>
	
		</main>
	
    
<footer>	

	    <div class="menu_rodape">	
		<address>
		<strong>ONG DVA</strong><br>
	     Av. Bartolomeu de Gusmão, 869 Cjt 23<br>
		 Bairro Aparecida <br>
		 Telefone: (13)3021-9917<br>
		</address>
		</div>
		
		<div class="icones">
		<img src="<?php echo base_url(); ?>static/img/twitter.png" alt="twitter">
		<img src="<?php echo base_url(); ?>static/img/facebook.png" alt="facebook">
		<img src="<?php echo base_url(); ?>static/img/youtube.png" alt="youtube">
		</div>


</footer>

	</body>
</html>