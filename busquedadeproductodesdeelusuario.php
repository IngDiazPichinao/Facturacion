<?
	include("resources/sf_properties.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function sumarneto() {
formulario = document.datos;
formulario.valornetototal.value=formulario.valorneto1.value+formulario.valorneto2.value+formulario.valorneto3.value+formulario.valorneto4.value+formulario.valorneto5.value+formulario.valorneto6.value+formulario.valorneto7.value+formulario.valorneto8.value+formulario.valorneto9.value+formulario.valorneto10.value;
}
function sumarniva() {
formulario = document.datos;
formulario.valorivatotal.value=formulario.valoriva1.value+formulario.valoriva2.value+formulario.valoriva3.value+formulario.valoriva4.value+formulario.valoriva5.value+formulario.valoriva6.value+formulario.valoriva7.value+formulario.valoriva8.value+formulario.valoriva9.value+formulario.valoriva10.value;
}
function sumartotal() {
formulario = document.datos;
formulario.valortotaltotal.value=formulario.valortotal1.value+formulario.valortotal2.value+formulario.valortotal3.value+formulario.valortotal4.value+formulario.valortotal5.value+formulario.valortotal6.value+formulario.valortotal7.value+formulario.valortotal8.value+formulario.valortotal9.value+formulario.valortotal10.value;
}

function suma1(text61,text62, text63, text64, text65,text66, text67,text68, text69, text70){
var suma1;
suma1=parseInt(text61)+parseInt(text62)+parseInt(text63)+parseInt(text64)+parseInt(text65)+parseInt(text66)+parseInt(text67)+parseInt(text68)+parseInt(text69)+parseInt(text70);
alert ('El resultado de la suma de los valores IVA es ' +suma1);
valorivatotal.value=suma1;
}
function suma2(text71,text72, text73, text74, text75,text76, text77,text78, text79, text80){
var suma2;
suma2=parseInt(text71)+parseInt(text72)+parseInt(text73)+parseInt(text74)+parseInt(text75)+parseInt(text76)+parseInt(text77)+parseInt(text78)+parseInt(text79)+parseInt(text80);
alert ('El resultado de la suma de los valores Totales es ' +suma2);
valortotaltotal.value=suma2;
}
function ValidaMail(email) {
var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
return exr.test(email);
}
if(!ValidaMail(f.campo.value)) {
alert("La dirección de EMail es incorrecta !!");
}
function valida(busqueda)
{
	if(busqueda.consulta.value=='')
	{
	alert("Error: Ingrese el producto que busca");
	busqueda.consulta.focus();
	return false;
	}
	return true;
}
function valida(datos)
{
	if(datos.text1.value=='')
	{
		alert('Error: Debe ingresar el codigo del producto');
		datos.text1.focus();
		return false;
	}
	codigo=parseInt(datos.text1.value)
	if(isNaN(codigo))
	{
		alert('Error: El codigo debe ser numerico');
		datos.text1.focus();
		return false;
	}
	if(datos.text11.value=='')
	{
		alert('Error: Debe ingresar la cantidad que decea llevar');
		datos.text11.focus();
		return false;
	}
	cantidad=parseInt(datos.text11.value)
	if(isNaN(cantidad))
	{
		alert('Error: La cantidad debe ser numerico');
		datos.text11.focus();
		return false;
	}
	if(datos.text21.value=='')
	{
		alert('Error: Debe ingresar el nombre del producto');
		datos.text21.focus();
		return false;
	}
	if(datos.text31.value=='')
	{
		alert('Error: Debe ingresar la marca del producto');
		datos.text31.focus();
		return false;
	}
	if(datos.text41.value=='')
	{
		alert('Error: Debe ingresar el modelo del producto');
		datos.text41.focus();
		return false;
	}
	if(datos.text51.value=='')
	{
		alert('Error: Debe ingresar el valor Neto del producto');
		datos.text51.focus();
		return false;
	}
	valorneto=parseInt(datos.text51.value)
	if(isNaN(valorneto))
	{
		alert('Error: El valor Neto debe ser numerico');
		datos.text51.focus();
		return false;
	}
	if(datos.text61.value=='')
	{
		alert('Error: Debe ingresar el valor IVA del producto');
		datos.text61.focus();
		return false;
	}
	valoriva=parseInt(datos.text61.value)
	if(isNaN(valoriva))
	{
		alert('Error: El valor IVA debe ser numerico');
		datos.text61.focus();
		return false;
	}
	if(datos.text71.value=='')
	{
		alert('Error: Debe ingresar el valor Total del producto');
		datos.text71.focus();
		return false;
	}
	valortotal=parseInt(datos.text71.value)
	if(isNaN(valortotal))
	{
		alert('Error: El valor total debe ser numerico');
		datos.text71.focus();
		return false;
	}
	if(datos.rut_cliente.value=='')
	{
		alert('Error: Debe ingresar RUT del cliente');
		datos.rut_cliente.focus();
		return false;
	}
	rut=parseInt(datos.rut_cliente.value)
	if(isNaN(rut))
	{
		alert('Error: El RUT del cliente debe ser numerico y sin digito verificador');
		datos.rut_cliente.focus();
		return false;
	}
	if(datos.nombrecompleto.value=='')
	{
		alert('Error: Debe ingresar el Nombre completo del cliente');
		datos.nombrecompleto.focus();
		return false;
	}
	if(datos.ciudad.value=='')
	{
		alert('Error: Debe ingresar la ciudad del cliente');
		datos.ciudad.focus();
		return false;
	}
	if(datos.email.value=='')
	{
		alert('Error: Debe ingresar el emao; del cliente');
		datos.email.focus();
		return false;
	}
	if(datos.telefono.value=='')
	{
		alert('Error: Debe ingresar el telefono del cliente');
		datos.telefono.focus();
		return false;
	}
	telefono=parseInt(datos.telefono.value)
	if(isNaN(telefono))
	{
		alert('Error: El numero telefonico debe ser numerico');
		datos.telefono.focus();
		return false;
	}
	if(datos.condiciondepago.value=='Seleccioe')
	{
		alert('Error: Debe elegir la condicion de pago');
		datos.condiciondepago.focus();
		return false;
	}
	if(datos.comuna.value=='')
	{
		alert('Error: Debe ingresar la comunadel cliente');
		datos.comuna.focus();
		return false;
	}
	if(datos.direccion.value=='')
	{
		alert('Error: Debe ingresar la direccion del cliente');
		datos.direccion.focus();
		return false;
	}
	if(datos.valornetototal.value=='')
	{
		alert('Error: Debe hacer clic en el boton Calcular Valor Neto Total');
		datos.valornetototal.focus();
		return false;
	}
	if(datos.valorivatotal.value=='')
	{
		alert('Error: Debe hacer click en el boton Calcular Valor IVA Total');
		datos.valorivatotal.focus();
		return false;
	}
	if(datos.valortotaltotal.value=='')
	{
		alert('Error: Debe hacer click en el boton Calcular Valor Total');
		datos.dvalortotaltotal.focus();
		return false;
	}
	return true;
}
</script>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $pclien; ?></title>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('Botones/pregunta 2.gif')">
<div align="center">
  <div align="center"></div>
  <p align="center" class="usuario"><? echo $bdu1; ?>
  <form action="" name="busqueda" method="get">
</p>
<div align="center">
<table width="649" border="10" bordercolor="#FF3300">
            <tr>
              <td width="312" class="logines"><? echo $bdu2; ?></td>
              <td width="231"><input name="consulta" type="text" size="55"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Buscar" name="buscar"></td>
              <td><a href="busquedadeproductodesdeelusuario1.php" target="_blank" onmouseover="MM_swapImage('Image2','','Botones/pregunta 2.gif',1)" onmouseout="MM_swapImgRestore()"><img src="Botones/pregunta1.gif" name="Image2" width="329" height="58" border="0" id="Image2" /></a></td>
              </tr>
    </table>
    </div></form>
<p>
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
<p>&nbsp;</p>
<form action="sf.php" target="_blank" method="GET" name="datos" onsubmit="return valida(datos)" >
<table width="1039" border="10 "bordercolor="#FF3300">
  <tr>
    <td width="144" height="27" class="logines"><? echo $bdu3; ?></td>
    <td width="144" class="logines"><? echo $bdu4; ?></td>
    <td width="144" class="logines"><? echo $bdu5; ?></td>
    <td width="143" class="logines"><? echo $bdu6; ?></td>
    <td width="76" class="logines"><? echo $bdu7; ?></td>
    <td width="108" class="logines"><? echo $bdu8; ?></td>
    <td width="96" class="logines"><? echo $bdu9; ?></td>
    <td width="114" class="logines"><? echo $bdu10; ?></td>
  </tr>
    <tr>
      <td height="48">
        <input type="text" name="codigo1" />
        <input type="text" name="codigo2" />
        <input type="text" name="codigo3" />
        <input type="text" name="codigo4" />
        <input type="text" name="codigo5" />
        <input type="text" name="codigo6" />
        <input type="text" name="codigo7" />
        <input type="text" name="codigo8" />
        <input type="text" name="codigo9" />
        <input type="text" name="codigo10" /></td>
      <td>
        <input type="text" name="cantidad1" />
        <input type="text" name="cantidad2" />
        <input type="text" name="cantidad3" />
        <input type="text" name="cantidad4" />
        <input type="text" name="cantidad5" />
        <input type="text" name="cantidad6" />
        <input type="text" name="cantidad7" />
        <input type="text" name="cantidad8" />
        <input type="text" name="cantidad9" />
        <input type="text" name="cantidad10" /></td>
      <td>      
        <input type="text" name="nombreproducto1" />
        <input type="text" name="nombreproducto2" />
        <input type="text" name="nombreproducto3" />
        <input type="text" name="nombreproducto4" />
        <input type="text" name="nombreproducto5" />
        <input type="text" name="nombreproducto6" />
        <input type="text" name="nombreproducto7" />
        <input type="text" name="nombreproducto8" />
        <input type="text" name="nombreproducto9" />
        <input type="text" name="nombreproducto10" /></td>
      <td>    
        <input type="text" name="marca1" />
        <input type="text" name="marca2" />
        <input type="text" name="marca3" />
        <input type="text" name="marca4" />
        <input type="text" name="marca5" />
        <input type="text" name="marca6" />
        <input type="text" name="marca7" />
        <input type="text" name="marca8" />
        <input type="text" name="marca9" />
        <input type="text" name="marca10" /></td>
      <td>
         <input type="text" name="modelo1" />
        <input type="text" name="modelo2" />
        <input type="text" name="modelo3" />
        <input type="text" name="modelo4" />
        <input type="text" name="modelo5" />
        <input type="text" name="modelo6" />
        <input type="text" name="modelo7" />
        <input type="text" name="modelo8" />
        <input type="text" name="modelo9" />
        <input type="text" name="modelo10" /></td>
      <td>
      
        <input name="valorneto1" type="text" />
        <input name="valorneto2" type="text" />
        <input name="valorneto3" type="text" />
        <input name="valorneto4" type="text" />
        <input name="valorneto5" type="text" />
        <input name="valorneto6" type="text" />
        <input name="valorneto7" type="text" />
        <input name="valorneto8" type="text" />
        <input name="valorneto9" type="text" />
        <input name="valorneto10" type="text" /></td>
      <td>
      
        <input name="valoriva1" type="text" />
        <input name="valoriva2" type="text" />
        <input name="valoriva3" type="text" />
        <input name="valoriva4" type="text" />
        <input name="valoriva5" type="text" />
        <input name="valoriva6" type="text" />
        <input name="valoriva7" type="text" />
        <input name="valoriva8" type="text" />
        <input name="valoriva9" type="text" />
        <input name="valoriva10" type="text" /></td>
        <td>
        
        <input name="valortotal1" type="text" />
        <input name="valortotal2" type="text" />
        <input name="valortotal3" type="text" />
        <input name="valortotal4" type="text" />
        <input name="valortotal5" type="text" />
        <input name="valortotal6" type="text" />
        <input name="valortotal7" type="text" />
        <input name="valortotal8" type="text" />
        <input name="valortotal9" type="text" />
        <input name="valortotal10" type="text" /></td>
    </tr>
</table>
<div align="right">
  <p align="center"><span class="usuario"><? echo $bdu11; ?></span><br />
  </p>
  <div align="center">
    <table width="200" border="10" bordercolor="#FF3300">
      <tr>
        <td class="logines"><? echo $bdu12; ?></td>
        <td class="logines"><? echo $bdu13; ?></td>
        <td class="logines"><? echo $bdu14; ?></td>
        <td class="logines"><? echo $bdu15; ?></td>
        <td class="logines"><? echo $bdu16; ?></td>
        <td class="logines"><? echo $bdu31; ?></td> 
        <td class="logines"><? echo $bdu17; ?></td>
        <td class="logines"><? echo $bdu18; ?></td>
        </tr>
      <tr>
        <td><input type="text" name="rut_cliente" /></td>
        <td><input type="text" name="nombrecompleto" /></td>
        <td><input type="text" name="ciudad" /></td>
        <td><input type="text" name="email" /></td>
        <td><input type="text" name="telefono" /></td>
        <td><select name="condiciondepago" size="1">
       <option>Seleccione</option>
            <option> Al contado </option>
            <option> Cheque a 30 dias </option>
            <option> 3 meses sin interes </option>  
      </select></td> 
        <td><input type="text" name="comuna" /></td>
        <td><input type="text" name="direccion" /></td>
        </tr>
    </table>
  </div>
  <p><br />
</p>
  <table width="500" height="106" border="10 "bordercolor="#FF3300">
    <tr>
      <td width="322" class="logines"><? echo $bdu19; ?></td>
      <td width="144"><input type="text" name="valornetototal" /></td>
      </tr>
    <tr>
      <td class="logines"><? echo $bdu20; ?></td>
      <td><input type="text" name="valorivatotal" /></td>
      </tr>
    <tr>
      <td height="26" class="logines"><? echo $bdu21; ?></td>
      <td><input type="text" name="valortotaltotal" /></td>
      </tr>
</table>
  <div align="center"><br />
    <table width="200" border="10 "bordercolor="#FF3300">
      <tr>
        <td><input type="submit" value="Enviar para emitir factura"  /></a></td>
        <td><input type="button" value="Calcular Valor Neto Total" onClick="sumarneto()"> </td>
        <td><input type="button" value="Calcular Valor Iva Total" onClick="sumarniva()">  </td>
        <td><input type="button" value="Calcular valor total" onClick="sumartotal()">  </td>
        </tr>
    </table>
  </div>
</div>
</p>
</form>
</body>
</html>