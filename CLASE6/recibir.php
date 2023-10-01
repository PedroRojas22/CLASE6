<?php 
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$opc=$_REQUEST["operar"];
if(isset($_REQUEST["enviar"])){
switch($opc){
  case 'sumar':
    $resultado=$num1+$num2;
    echo "la suma de ".$num1."+".$num2."=".$resultado;
    break;
    case 'res':
        $resultado=$num1-$num2; 
        echo "la diferencia de ".$num1."-".$num2."=".$resultado; 
        break;
    case 'mult':
        $resultado=$num1*$num2; 
        echo "El producto  de ".$num1."*".$num2."=".$resultado; 
        break;
    case 'dividir':
        $resultado=$num1/$num2; 
        echo "El cociente  de ".$num1."/".$num2."=".$resultado;
        break;
        default:
        echo "Vuleve a Ingresar ";
        break;
    }
}

?>
