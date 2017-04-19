<?php
$nombre=$_GET['nombre'];
$marca=$_GET['marca'];
$modelo=$_GET['modelo'];
$cantidad=$_GET['cantidad'];
$codigo=$_GET['codigo'];
$valorneto=$_GET['valorneto'];
$valoriva=$_GET['valoriva'];
$total=$_GET['total'];
$link=mysql_connect("127.0.0.1","root","seba") or die ("no se puede conectar al servidor");
mysql_select_db("sf", $link);
$sql="INSERT INTO inventario(nombre, marca, modelo, cantidad, codigo, valorneto, valoriva, total) values('$nombre', '$marca', '$modelo', '$cantidad', '$codigo', '$valorneto', '$valoriva', '$total')";
if(mysql_query($sql,$link))
{
	header("location: scriptregistroarticulo.php ");
}
?>