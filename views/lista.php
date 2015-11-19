
<!DOCTYPE html>
<html>
    <head>


      
       <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/lista.css" />
    </head>
    <body>
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
    </body>
</html>