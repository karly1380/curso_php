<?php 
//los operadores logicos sirven para validar expresiones tal es el caso del operador or que sirve para validar una secuencia u otra en el caso del operador and sirve para validar sentencias

$resultado=50;
  
    if($resultado< 51 and $resultado> 49){
    	//"es un numero 50 valido"
    }
$edadvalida=25;

   if($edadvalida > 18 and $edadvalida < 26){
   	   //echo "la edad es valida";
   }

   $sexo="M";

    if($sexo=='M' or $sexo=='F'){
    	echo "sexo valido";
    }
 ?>