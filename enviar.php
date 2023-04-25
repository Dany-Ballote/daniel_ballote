<?php

$destino = "jdballote91@outlook.com";
$asunto = "Contacto desde el sitio web";


$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];
$contenido = "
	<b>Nombre :</b> " . $nombre . "<br><b>Correo :</b>" . $correo . "<br><b>Titulo :</b> " . $titulo . "<br><b>Mensaje : </b> " . $mensaje;

// PARA QUE RECONOZCA LAS ETIQUETAS HTML

$encabezados  = "MIME-Version: 1.0" . "\r\n";
$encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// FUNCION MAIL Y REDIRECCIONAMIENTO
mail($destino, $asunto, $contenido, $encabezados);
header("Location: index.html");
