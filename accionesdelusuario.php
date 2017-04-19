<?
	include("resources/sf_properties.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $ti;?></title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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

<body onload="MM_preloadImages('Botones/IP1.gif','Botones/EF2.gif','Botones/rcli2.gif','Botones/rnewu2.gif')">
<p align="center" class="usuario"> <? echo $bie; ?> </p>
<div align="center">
  <table width="200">
    <tr>
      <td><div align="center">
        <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="200">
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
        </object>
      </div></td>
    </tr>
  </table>
  <p class="footer"><? echo $eli; ?></p>
  <p>&nbsp;</p>
  <table width="200" border="10" bordercolor="#FF3300">
    <tr>
      <td><a href="preparaciondefactura.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','Botones/EF2.gif',1)"><img src="Botones/EF1.gif" name="Image4" width="219" height="74" border="0" id="Image4" /></a></td>
      <td><a href="formularioinventario.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','Botones/IP1.gif',1)"><img src="Botones/IP2.gif" name="Image3" width="219" height="74" border="0" id="Image3" /></a></td>
      <td><a href="formulariocliente1.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','Botones/rcli2.gif',1)"><img src="Botones/rcli1.gif" name="Image5" width="219" height="74" border="0" id="Image5" /></a></td>
      <td><a href="verificadorregistro1.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','Botones/rnewu2.gif',1)"><img src="Botones/rnewu1.gif" name="Image6" width="219" height="74" border="0" id="Image6" /></a></td>
    </tr>
  </table>
  <p class="logines">&nbsp;</p>
</div>
<p><script type="text/javascript">
swfobject.registerObject("FlashID");
  </script></p>
</body>
</html>