<form action="" name="busqueda" method="get">
<input type="text" name="consulta">
<input type="submit" value="Buscar" name="buscar">

</form>
<?
$busqueda=$_GET['busqueda'];
$buscar=$_GET['buscar'];
if(isset($buscar)){
	$conexion=mysql_connect("127.0.0.1", 'root', "seba") or die(mysql_error());
	$db = mysql_select_db("sf", $conexion) or die (mysql_error());
	$consulta = mysql_query("SELECT * FROM inventario WHERE nombre like '%$consulta%'");
	while($datos = mysql_fetch_assoc($consulta)){
		if($contado==0){	
		echo 'El nombre del producto es: '.$datos['nombre']."---"."La marca  del producto es: ".$datos['marca'].'El modelo del producto es: '.$datos['modelo']."---"."La cantidad existente del producto es: ".$datos['cantidad'].'El codigo del producto es: '.$datos['codigo']."---"."El valor Neto del producto es: ".$datos['valorneto'].'El valor IVA del producto es: '.$datos['valoriva']."---"."La valor Total del producto es: ".$datos['valortotal']." <br>";
		echo "<hr size='3' color='#FF0000'>";
			
		}else{
		print "No se ha encontrado registros en la base de datos";

	}
}
}




?>