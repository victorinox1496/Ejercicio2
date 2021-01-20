<?php
$texto = "Un día ví una vaca sin cola vestida de uniforme"; //Cadena de texto
$separador = " "; //Separador utilizado
$arreglo = explode($separador, $texto);//Con esta funcion se conviertela cadena de texto en Array
$arregloin = array_reverse($arreglo);//Aqui se invierte el array
$textoin = implode($separador, $arregloin);//y con esta funcion se vueleve a convertir el array en una cadena de texto
echo $texto."<br>";//Visualizar texto original
echo $textoin;//Visualizar texto invertido
?>
