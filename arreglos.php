<?php 
//un arreglo es un tipo de dato que puede contener N datos a partir de un almacenamiento por indice
$arreglo=array();
$arreglo[0]="juan";
$arreglo[1]=10;
$arreglo[2]='facultad :)';
$arreglo[3]='autodidacta';

for($i=0; $i < count($arreglo); $i++){
	echo $arreglo[$i];
	echo "<br>";
}
 ?>