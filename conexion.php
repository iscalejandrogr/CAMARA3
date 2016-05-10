<?php

/*$usario="root";
$passwd="alex";
$servidor="localhost";
$BD="serviciosLibres";*/

/*$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_servicios";*/

$usario="u726031340_alex";
$passwd="drag0n";
$servidor="	mysql.hostinger.mx";
$BD="u726031340_libre";

$conexion=mysql_connect($servidor,$usario,$passwd)or die("Error al conectarse a la base de datos:".mysql_error());
mysql_select_db($BD,$conexion);
?>
