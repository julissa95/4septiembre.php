<?php

echo "Hola";
var_dump($_GET);
echo "Su nombre es".$_GET['nombre'];
echo "Su nombre es".$_GET['apellido'];
$archivo=fopen('usuario.txt','w');
//fwrite($archivo,$_GET['nombre']."\n");
//fclose("$archivo.txt");
//vamos a testear que nos muestra esto
$miobjeto=new stdClass();
$miobjeto->nombre=$_GET['Nombre'];
$miobjeto->apellido=$_GET['Apellido'];

var_dump(json_encode($miobjeto));
//Notacion de objeto de Java Script
//deja la escritura de un objeto para 
//formar de transmitir datos
fwrite($archivo,json_encode($miobjeto));
fclose($archivo);


//var_dump($miobjeto);








?>