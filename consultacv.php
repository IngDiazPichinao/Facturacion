<?
$cv=$_GET['cv' ];
$link=mysql_connect("127.0.0.1","root","seba") or die ("no se puede conectar al servidor"); 
mysql_select_db("sf", $link); 
$res=mysql_query("SELECT cv from usuario where cv ='".$cv."'"); 
$nfila=mysql_num_rows($res);
if($nfila>0)
{ 
  header("location: scriptrecibecvformulariousuario.php");
}
else
{ 
  header("Location: scriptnorecibecv.php");
} 
?>