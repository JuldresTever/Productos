<?php
$Produ1= $_POST ['Produ1'];
$Produ2=$_POST ['Produ2'];
$Produ3=$_POST ['Produ3'];
$Precio1=$_POST ['Precio1'];
$Precio2=$_POST ['Precio2'];
$Precio3=$_POST ['Precio3'];
$SumaPrecios= 0;
$Descuento= 0;
$Total= 0;

$SumaPrecios= $Precio1 + $Precio2 + $Precio3;
$Descuento= $SumaPrecios * 0,16;
$Total= $SumaPrecios - $Descuento;

echo "Los productos comprados son: ".$Produ1 .$Produ2 .$Produ3;
echo "El precio de estos articulos es: ".$SumaPrecios;
echo "Se hara un descuento de: ".$Descuento;
echo "El total a pagar es: ".%Total;
?> 
