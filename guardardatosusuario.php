<?
$rut=$_GET['rut'];
$contrasena=$_GET['contrasena'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$direccion=$_GET['direccion'];
$dia=$_GET['dia'];
$mes=$_GET['mes'];
$ano=$_GET['ano'];
$email=$_GET['email'];
$link=mysql_connect("127.0.0.1","root","seba") or die ("no se puede conectar al servidor");
mysql_select_db("sf", $link);
$sql="INSERT INTO usuario(rut, contrasena, nombre, apellido, direccion, dia, mes, ano, email) values('$rut', '$contrasena', '$nombre', '$apellido', '$direccion', '$dia', '$mes', '$ano', '$email')";
if(mysql_query($sql,$link))
{
	header("location: scriptformulariousuariorealizado.php ");
	}
?>