<?
	include("resources/sf_properties.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function valida(busqueda)
{
	if(busqueda.consulta2.value=='')
	{
		alert('Error Debe ingresar el RUT del cliente');
		formulario.consulta2.focus();
		return false;
	}
	return true;
}
function ValidaMail(email) {
var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
return exr.test(email);
}
if(!ValidaMail(f.campo.value)) {
alert("La dirección de EMail es incorrecta !!");
}
function valida(datos)
{
	if(datos.rut.value=='')
	{
		alert('Error Debe ingresar el RUT del cliente');
		datos.rut.focus();
		return false;
	}
	rut1=parseInt(datos.rut.value)
	if(isNaN(rut1))
	{
		alert('Error Debe ingresar el RUT numerico');
		datos.rut.focus();
		return false;
	}
	if(datos.nombrecompleto.value=='')
	{
		alert('Error Debe ingresar el nombre completo  del cliente');
		datos.nombrecompleto.focus();
		return false;
	}
	if(datos.ciudad.value=='')
	{
		alert('Error Debe ingresar la ciudad del cliente');
		datos.ciudad.focus();
		return false;
	}
	if(datos.email.value=='')
	{
		alert('Error Debe ingresar el email del cliente');
		datos.email.focus();
		return false;
	}
	if(ValidaMail(datos.email.value))
	{
		return true;
	}else{
		alert("Error Su email no es valido");
		datos.email.focus();
		return false;

	} 
	if(datos.telefono.value=='')
	{
		alert('Error Debe ingresar el telefono del cliente');
		datos.telefono.focus();
		return false;
	}
	telefono1=parseInt(datos.telefono.value)
	if(isNaN(telefono1))
	{
		alert('Error Debe ingresar un numero telefonico numerico');
		datos.telefono.focus();
		return false;
	}
	if(datos.comuna.value=='')
	{
		alert('Error Debe ingresar la comuna del cliente');
		datos.comuna.focus();
		return false;
	}
	if(datos.direccion.value=='')
	{
		alert('Error Debe ingresar el telefono del cliente');
		datos.direccion.focus();
		return false;
	}
	return true;
}
</script>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $pclien;?> </title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div align="center">
  <table width="200" cellspacing="2">
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
  <p>&nbsp;</p>
</div>
<p align="center"><span class="usuario"><? echo $pclien;?></span></p>
<div align="center">
 <form action="" name="busqueda" method="get" onsubmit="return valida(busqueda)">
  <table width="649" border="10" bordercolor="#FF3300">
    <tr>
      <td width="312" class="logines"><? echo $ircli;?></td>
      <td width="231"><input name="consulta2" type="text" size="55" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Buscar" name="buscar" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
 </form>
</div>
<p>
  <?
$busqueda=$_GET['busqueda'];
$buscar=$_GET['buscar'];
if(isset($buscar)){
	$conexion=mysql_connect("127.0.0.1", 'root', "seba") or die(mysql_error());
	$db = mysql_select_db("sf", $conexion) or die (mysql_error());
	$consulta = mysql_query("SELECT * FROM sistema WHERE rut_cliente like '%$consulta2%'");
	while($datos = mysql_fetch_assoc($consulta)){
		if($contado==0){	
		echo '<font color="#000000">'.$datos['rut_cliente'];'</font><br />
        <font color="#000000">'.$datos['telefono'];'</font><br />
        <font color="#000000">'.$datos['nombrecompleto'];'</font><br />
        <font color="#000000">'.$datos['condiciondepago'];'</font><br />
        <font color="#000000">'.$datos['ciudad'];'</font><br />
		<font color="#000000">'.$datos['comuna'];'</font><br />
        <font color="#000000">'.$datos['direccion'];'</font><br />
        <font color="#000000">'.$datos['email'];'</font><br />
          <font color="#000000">'.$datos['codigo1'];'</font> <br />
          <font color="#000000">'.$datos['codigo2'];'</font> <br />
          <font color="#000000">'.$datos['codigo3'];'</font> <br />
          <font color="#000000">'.$datos['codigo4'];'</font> <br />
          <font color="#000000">'.$datos['codigo5'];'</font> <br />
          <font color="#000000">'.$datos['codigo6'];'</font> <br />
          <font color="#000000">'.$datos['codigo7'];'</font> <br />
          <font color="#000000">'.$datos['codigo8'];'</font> <br />
          <font color="#000000">'.$datos['codigo9'];'</font> <br />
          <font color="#000000">'.$datos['codigo10'];'</font> <br />
          <font color="#000000">'.$datos['cantidad1'];'</font> <br />
          <font color="#000000">'.$datos['cantidad2'];'</font> <br />
          <font color="#000000">'.$datos['cantidad3'];'</font> <br />
          <font color="#000000">'.$datos['cantidad4'];'</font> <br />
          <font color="#000000">'.$datos['cantidad5'];'</font> <br />
          <font color="#000000">'.$datos['cantidad6'];'</font> <br />
          <font color="#000000">'.$datos['cantidad7'];'</font> <br />
          <font color="#000000">'.$datos['cantidad8'];'</font> <br /> 
          <font color="#000000">'.$datos['cantidad9'];'</font> <br />
          <font color="#000000">'.$datos['cantidad10'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto1'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto2'];'</font><br />
          <font color="#000000">'.$datos['nombreproducto3'];'</font><br />
          <font color="#000000">'.$datos['nombreproducto4'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto5'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto6'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto7'];'</font><br />
          <font color="#000000">'.$datos['nombreproducto8'];'</font> <br /> 
          <font color="#000000">'.$datos['nombreproducto9'];'</font> <br />
          <font color="#000000">'.$datos['nombreproducto10'];'</font><br />
          <font color="#000000">'.$datos['marca1'];'</font> <br />
          <font color="#000000">'.$datos['marca2'];'</font> <br />
          <font color="#000000">'.$datos['marca3'];'</font> <br />
          <font color="#000000">'.$datos['marca4'];'</font> <br />
          <font color="#000000">'.$datos['marca5'];'</font> <br />
          <font color="#000000">'.$datos['marca6'];'</font> <br />
          <font color="#000000">'.$datos['marca7'];'</font> <br />
          <font color="#000000">'.$datos['marca8'];'</font> <br /> 
          <font color="#000000">'.$datos['marca9'];'</font> <br />
          <font color="#000000">'.$datos['marca10'];'</font> <br /> 
          <font color="#000000">'.$datos['modelo1'];'</font> <br />
          <font color="#000000">'.$datos['modelo2'];'</font> <br />
          <font color="#000000">'.$datos['modelo3'];'</font> <br />
          <font color="#000000">'.$datos['modelo4'];'</font> <br />
          <font color="#000000">'.$datos['modelo5'];'</font> <br />
          <font color="#000000">'.$datos['modelo6'];'</font> <br />
          <font color="#000000">'.$datos['modelo7'];'</font> <br />
          <font color="#000000">'.$datos['modelo8'];'</font> <br /> 
          <font color="#000000">'.$datos['modelo9'];'</font> <br />
          <font color="#000000">'.$datos['modelo10'];'</font> <br />
          <font color="#000000">'.$datos['valorneto1'];'</font> <br />
          <font color="#000000">'.$datos['valorneto2'];'</font> <br />
          <font color="#000000">'.$datos['valorneto3'];'</font> <br />
          <font color="#000000">'.$datos['valorneto4'];'</font> <br />
          <font color="#000000">'.$datos['valorneto5'];'</font> <br />
          <font color="#000000">'.$datos['valorneto6'];'</font> <br />
          <font color="#000000">'.$datos['valorneto7'];'</font> <br /> 
          <font color="#000000">'.$datos['valorneto8'];'</font> <br />
          <font color="#000000">'.$datos['valorneto9'];'</font> <br />
		  <font color="#000000">'.$datos['valorneto10'];'</font> <br />
          <font color="#000000">'.$datos['valoriva1'];'</font> <br />
          <font color="#000000">'.$datos['valoriva2'];'</font> <br />
          <font color="#000000">'.$datos['valoriva3'];'</font> <br />
          <font color="#000000">'.$datos['valoriva4'];'</font> <br />
          <font color="#000000">'.$datos['valoriva5'];'</font> <br />
          <font color="#000000">'.$datos['valoriva6'];'</font> <br />
          <font color="#000000">'.$datos['valoriva7'];'</font> <br />
          <font color="#000000">'.$datos['valoriva8'];'</font> <br /> 
          <font color="#000000">'.$datos['valoriva9'];'</font> <br />
          <font color="#000000">'.$datos['valoriva10'];'</font> <br />
          <font color="#000000">'.$datos['valortotal1'];'</font> <br />
          <font color="#000000">'.$datos['valortotal2'];'</font> <br />
          <font color="#000000">'.$datos['valortotal3'];'</font> <br />
          <font color="#000000">'.$datos['valortotal4'];'</font> <br />
          <font color="#000000">'.$datos['valortotal5'];'</font> <br />
          <font color="#000000">'.$datos['valortotal6'];'</font> <br />
          <font color="#000000">'.$datos['valortotal7'];'</font> <br />
          <font color="#000000">'.$datos['valortotal8'];'</font> <br /> 
          <font color="#000000">'.$datos['valortotal9'];'</font> <br />
          <font color="#000000">'.$datos['valortotal10'];'</font> <br />
		  <font color="#000000">'.$datos['valornetototal'];'</font> <br />
		  <font color="#000000">'.$datos['valorivatotal'];'</font><br />
		  <font color="#000000">'.$datos['valortotaltotal'];'</font>';
  
		echo "<hr size='3' color='#0000FF'>";
			
		}else{
		print "No se ha encontrado registros en la base de datos";

	}
}
}
?>
</p>
<form action="sf.php" method="post" name="datos" onsubmit="return valida(datos)">
  <div align="center">
    <input type="submit" value="Enviar" />
  </div>
</form>
<script type="text/javascript">
swfobject.registerObject("FlashID");
  </script>
  <td width="68"  class="button"><div align="center">
    <input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
  </div></td>  
</body>

</html>