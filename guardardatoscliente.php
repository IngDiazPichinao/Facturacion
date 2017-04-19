<?
$rut=$_GET['rut'];
$contrasena=$_GET['contrasena'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$comuna=$_GET['comuna'];
$ciudad=$_GET['ciudad'];
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];
$dia=$_GET['dia'];
$mes=$_GET['mes'];
$ano=$_GET['ano'];
$email=$_GET['email'];
$link=mysql_connect("127.0.0.1","root","seba") or die ("no se puede conectar al servidor");
mysql_select_db("sf", $link);
$sql="INSERT INTO cliente(rut, contrasena, nombre, apellido, comuna, ciudad, direccion, telefono, dia, mes, ano, email) values('$rut', '$contrasena', '$nombre', '$apellido', '$comuna', '$ciudad', '$direccion', '$telefono', '$dia', '$mes', '$ano', '$email')";
if(mysql_query($sql,$link))
{
	header("location: scriptformulariousuariorealizado.php ");
	}
?>