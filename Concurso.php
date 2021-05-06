<?php 
$para       = "info@mavitravel.com.co";
$titulo     = 'Mensaje enviado desde www.mavitravel.com.co';
$mensaje  = '<html><body>';
$mensaje .= '<h2>Formulario de registro concurso</h2>';
$mensaje .= '<p>Enviado el '.  date("d M Y").'</p>';
$mensaje .= '<p>Asunto : Solicitud De Registro concurso</p>';
$mensaje .= '<hr />';
$mensaje .= '<p>Nombres y Apellidos: <strong>'.$_POST['Idnombre'].'</strong>';
$mensaje .= '<p>Identificación: <strong>'.$_POST['Ididentificacion'].'</strong>';
$mensaje .= '<p>Tipo: <strong>'.$_POST['Idtipo'].'</strong>';
$mensaje .= '<p>Ciudad: <strong>'.$_POST['Idciudad'].'</strong>';
$mensaje .= '<p>Dirección: <strong>'.$_POST['Iddireccion'].'</strong>';
$mensaje .= '<p>Email: <strong>'.$_POST['Idmail'].'</strong>';
$mensaje .= '<p>Celular: <strong>'.$_POST['Idtelefono'].'</strong>';
$mensaje .= '<hr />';
$mensaje .= '</body></html>';
$cabeceras  = 'From:'.$_POST['Idmail'] . "\r\n" ."Content-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit";
mail($para, $titulo, $mensaje, $cabeceras);
?>
<?php
header("Location: Confirmacion.html");
?>