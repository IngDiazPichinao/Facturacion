<?
$rut=$_GET['rut' ];
$contrasena=$_GET['contrasena' ]; 
$link=mysql_connect("127.0.0.1","root","seba") or die ("no se puede conectar al servidor"); 
mysql_select_db("sf", $link); 
$res=mysql_query("SELECT rut, contrasena from usuario where rut ='".$rut."' and contrasena='".$contrasena ."'"); 
$nfila=mysql_num_rows($res);
if($nfila>0)
{ 
  header("location: scriptrecibe.php");
}
else
{ 
  header("Location: scriptrecibeno.php");
} 
?>