<?php 
$diametro=$_REQUEST["num1"];
$altura=$_REQUEST["num2"];
$radio=$diametro/2;
$pi=3.1416;
$opc=$_REQUEST["operar"];
if(isset($_REQUEST["volsolid"])){
switch($opc){
  case 'sumar':
    $volumen=$pi*$radio*$radio*$altura;
    echo "el volumen del cilindro es ".$volumen. " m3";
    break;
    case 'res':
        $resultado=($pi*($diametro^2)*$altura)/3; 
        echo "el   Volumen del cono es ".$resultado; 
        break;
    case 'mult':
        $resultado=3/4 * $Pi * $Radio^3;
        echo "el volumen de la esfera ".$resultado; 
        break;
    
    }
}

?>

