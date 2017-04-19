<?
	include("resources/sf_properties.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $bpd; ?></title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div align="center">
  <div align="center">
    <table width="200">
      <tr>
        <td><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="200">
          <param name="movie" value="Logo/logo.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="Logo/logo.swf" width="400" height="200">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
            <div>
              <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object></td>
      </tr>
      </table>
  </div>
  <p>&nbsp;</p>
<p align="center" class="usuario"><? echo $bqp; ?>
  <form action="" name="busqueda" method="get">
</p>
<div align="center">
<table width="678" border="10" bordercolor="#FF3300">
            <tr>
              <td width="314" class="logines"><? echo $bing; ?></td>
              <td width="330"><input name="consulta" type="text" size="55"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Buscar" name="buscar"></td>
              </tr>
    </table>  
        </div>
   </form>
        <script type="text/javascript">
swfobject.registerObject("FlashID");
        </script>
      <?
$busqueda=$_GET['busqueda'];
$buscar=$_GET['buscar'];
if(isset($buscar)){
	$conexion=mysql_connect("127.0.0.1", 'root', "seba") or die(mysql_error());
	$db = mysql_select_db("sf", $conexion) or die (mysql_error());
	$consulta = mysql_query("SELECT * FROM inventario WHERE nombre like '%$consulta%'");
	while($datos = mysql_fetch_assoc($consulta)){
		if($contado==0){	
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4"> El nombre del producto es: </font>'.$datos['nombre']."</font></font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">La marca  del producto es: </font>'.$datos['marca']."</font> </font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">El modelo del producto es: </font>'.$datos['modelo']."</font> </font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">La cantidad existente del producto es: </font>'.$datos['cantidad']."</font? </font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">El codigo del producto es: </font>'.$datos['codigo']." </font? </font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">El valor Neto del producto es: </font>'.$datos['valorneto']."</font> </font> <br>";
		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">El valor IVA del producto es: </font>'.$datos['valoriva']."</font> </font> <br>";
 		echo '<font color="#FFFFFF"><font face="Arial, Helvetica, sans-serif"><font size="4">La valor Total del producto es: </font>'.$datos['valortotal']." </font> </font> <br>";
		echo "<hr size='3' color='#0000FF'>";
			
		}else{
		echo "<font color='#FF0000'><font soze='5'>No se ha encontrado registros en la base de datos</font></font>";

	}
}
}
?>


</body>
</html>