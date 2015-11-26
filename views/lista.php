
<!DOCTYPE html>
<html>
    <head>

 <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/administrador.css" />
      
       <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/lista.css" />
        	<link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/main.css" />
    </head>
    <body>
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
						<a href="https://ongdeanimais-giully.c9.io/index.php/controller/index"><div class="logo"></div></a>
		</div>
		<div class="r-triangle-top"></div>
		<div class="r-triangle-bottom"></div>
	</div>
</header>
	
	<main>
        <?php 
 echo "<table>";
echo "    <thead>";
echo "      <tr>";
echo "        <th>";
echo            "NOME";
echo "        </th>";
echo "        <th>";
echo         " TELEFONE";
echo "        </th>";
echo "        <th>";
echo        "   EMAIL";
echo "        </th>";
echo "        <th>";
echo         "  ASSUNTO";
echo "        </th>";
echo "        <th>";
echo          "MENSAGEM";
echo "        </th>";
echo "     </tr>";
echo "    </thead>";   
echo "    <tbody>";    
            foreach($usuarios as $u){
            
            
echo "    <tr>";
echo "        <td>";
echo             $u->nome;
echo "        </td>";
echo "        <td>";
echo           $u->telefone;
echo "        </td>";
echo "        <td>";
echo            $u->email;
echo "        </td>";
echo "        <td>";
echo           $u->assunto;
echo "        </td>";
echo "        <td>";
echo           $u->mensagem;
echo "        </td>";
echo "    </tr>";

		    }
 echo "    </tbody>"; 
echo "</table>";
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