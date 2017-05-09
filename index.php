
<?php
include ('lib/Producto.php');
$oProducto1 = new Producto();
$oProducto2 = new Producto();
$oProducto3= new Producto();


$oProducto1->nombre="Producto 1"; // para llamar a la variable
$oProducto1->codigo="001";
$oProducto1->precio=465456;


$oProducto2->nombre="Producto 1"; // para llamar a la variable
$oProducto2->codigo="001";
$oProducto2->precio=3213;


$aProductos[0]=$oProducto1;
$aProductos[1]=$oProducto2;
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
            echo $oProducto->nombre;
        
            foreach ($aProductos as $oPro){
                
                echo $oPro->codigo."  ".$oPro->nombre;
                echo"<br>";
                
            }
            
            
        ?>
    </body>
</html>
