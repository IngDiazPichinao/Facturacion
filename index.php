<?
	include("resources/sf_properties.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $tit1; ?></title>
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<script src="swfobject_modified.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>


<script>
function valida(Formulariousuario)
{
	if(Formulariousuario.rut.value=='')
	{
		alert('Debe Ingresar su RUT sin numero verificador');
		Formulariousuario.rut.focus();
		return false;
	}
	
	numero=parseInt(Formulariousuario.rut.value);
	if(isNaN(numero))
	{
		alert('Error su RUT debe ser numerico y sin digito verificador');
		Formulariousuario.rut.focus();
		return false;
	}
	
	
	if(Formulariousuario.contrasena.value=='')
	{
		alert('Debe ingresar su contraseña');
		Formulariousuario.contrasena.focus();
		return false;
	}
	return true;
	
}
</script>



<script>
function valida(Formulario)
{
	if(Formulario.rut.value=='')
	{
		alert('Debe Ingresar su RUT sin numero verificador');
		Formulario.rut.focus();
		return false;
	}
	
	numero=parseInt(Formulario.rut.value);
	if(isNaN(numero))
	{
		alert('Error su RUT debe ser numerico y sin digito verificador');
		Formulario.rut.focus();
		return false;
	}
	
	
	if(Formulario.contrasena.value=='')
	{
		alert('Debe ingresar su contraseña');
		Formulario.contrasena.focus();
		return false;
	}
	return true;
	
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
<body onload="MM_preloadImages('Botones/reu2.gif','Botones/rec.gif')">
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
  <p align="center" class="usuario"><? echo $usu;?></p>

  <form action="consultaloginusuario.php"name="Formulariousuario" method="get" onSubmit="return valida(Formulariousuario)">
    <div align="center">
      <table width="<? echo $A1;?>" border="<? echo $bo;?>" bordercolor="<? echo $cb;?>">
        <tr>
          <td width="190" class="logines"><? echo $crut;?></td>
          <td width="198"><input name="rut" type="text" size="33" /></td>
        </tr>
        <tr>
          <td class="logines" ><? echo $ccon;?></td>
          <td><input name="contrasena" type="password" size="33" /></td>
          </tr>
        <tr>
          <td><div align="center">
             <input type="submit" name="button" id="button" value="Enviar" />
          </div></td>
          <td><div align="center">
            <input type="reset" name="button2" id="button2" value="Limpiar">
          </div></td>>
      </table>
    </div>
</form>
  <div align="right">
  
    <table width="440" border="5" bordercolor="#0099FF">
      <tr>
        <td width="205" height="63" class="nuevo"><? echo $rnue;?></p>
          <p><? echo $dr;?></td>
        <td width="219"><a href="verificadorregistro.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','Botones/reu2.gif',1)"><img src="Botones/reu.gif" name="Image2" width="219" height="53" border="0" id="Image2" /></a></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
<p align="center" class="usuario"> <? echo $clien;?></p>
<form action="consultalogincliente.php" name="Formulario" method="get" onSubmit="return valida(Formulario)">
  <div align="center">
    <table width="385" border="10" bordercolor="#FF3300">
      >
      <tr>
        <td width="153" class="logines"><? echo $crut;?></td>
        <td width="198"><input name="rut" type="text" size="33" /></td>
        </tr>
      <tr>
        <td class="logines"><? echo $ccon;?></td>
        <td><input name="contrasena" type="password" size="33" /></td>
        </tr>
      <tr>
        <td><div align="center">
          <input type="submit" name="button" id="button" value="Enviar"  />
        </div></td>
        <td><div align="center">
         <input type="reset" name="button2" id="button2" value="Limpiar">
        </div></td>
        </tr>
      </table>
  </div>
</form>
<div align="right">
  <table width="400" border="5" bordercolor="#0099FF">
    <tr>
      <td width="169" height="63"  class="nuevo"><? echo $clnu;?></p>
        <p><? echo $dr;?></td>
      <td width="219"><a href="formulariocliente.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','Botones/rec.gif',1)"><img src="Botones/rec2.gif" name="Image3" width="219" height="53" border="0" id="Image3" /></a></td>
    </tr>
  </table>
</div>

</body>
</html>