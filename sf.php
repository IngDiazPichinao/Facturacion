<?
	include("resources/sf_properties.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Estilos/Estilofactura.css" rel="stylesheet" />
<title><? echo $sf;?></title>
</head> 
<body>
    <div align="center">
      <table width="714" border="5" bordercolor="#FF0000">
        <tr>
          <td width="100" height="218"><table width="327">
            <tr>
              <td width="119"><div align="center" class="banner"><? echo $sistf;?></div></td>
              <td width="196">&nbsp;</td>
            </tr>
            <tr>
              <td><img src="Logo/Imagen Logo.jpg" alt="" width="119" height="123" /></td>
              <td><p align="center" class="banner"><? echo $sf1;?></p>
                <p align="center" class="banner"><? echo $sf2;?></p>
                <p align="center" class="banner"><? echo $sf3;?></p>
                <p align="center" class="banner"><? echo $sf4;?></p>
                <p>&nbsp; </p>            <p>&nbsp;</p></td>
            </tr>
          </table></td>
          <td width="322" class="rut"><b><? echo $sf5;?></b></td>
        </tr>
      </table>
</div>
    </div>
  <div align="center">
<form action="ultimaconeccion.php" method="post">
    <div align="center">
      <table width="651" border="5" bordercolor="#0000FF">
        <tr>
          <td width="145" class="cliente"><? echo $sf6;?></td>
          <td class="cliente" width="144"> <font color="#000000"><? echo $_GET["rut_cliente"]; ?></font></td>
          <td width="182" class="cliente"><? echo $sf7;?></td>
          <td class="cliente"  width="144"><font color="#000000"><? echo $_GET["telefono"]; ?></font></td>
        </tr>
        <tr>
          <td class="cliente"><? echo $sf8;?></td>
          <td class="cliente" > <font color="#000000"><? echo $_GET["nombrecompleto"]; ?></font></td>
          <td class="cliente"><? echo $sf9;?></td>
          <td class="cliente" ><font color="#000000"><? echo $_GET["condiciondepago"]; ?></font></td>
        </tr>
        <tr>
          <td class="cliente"><? echo $sf10;?></td>
          <td class="cliente" ><font color="#000000"><? echo $_GET["ciudad"]; ?></font></td>
          <td class="cliente"><? echo $sf11;?></td>
          <td class="cliente" ><font color="#000000"><? echo $_GET["comuna"]; ?></font></td>
        </tr>
        <tr>
          
          
          <td class="cliente"><? echo $sf15;?></td>
          <td class="cliente"><font color="#000000"><? echo $_GET["direccion"]; ?></font></td>
        </tr>
        <tr>
          
          
        </tr>
        <tr>
          <td class="cliente"><? echo $sf16;?></td>
          <td class="cliente"><font color="#000000"><? echo $_GET["email"]; ?></font></td>
        </tr>
        </table>
    </div>
    <div align="center">
    <table width="1044" border="5" bordercolor="#0000FF">
      <tr>
        <td class="cliente" width="112"><? echo $sf17;?></td>
        <td class="cliente"  width="112"><? echo $sf18;?></td>
        <td class="cliente"  width="200"><? echo $sf19;?></td>
        <td class="cliente"  width="112"> <? echo $sf20;?></td>
        <td class="cliente"  width="112"><? echo $sf21;?></td>
        <td class="cliente"  width="112"><? echo $sf22;?></td>
        <td class="cliente"  width="112"><? echo $sf23;?></td>
        <td class="cliente"  width="112"><? echo $sf24;?></td>
      </tr>
      <tr>
        <td height="48" class="cliente" >
          <font color="#000000"><? echo $_GET["codigo1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo8"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["codigo10"]; ?></font> <br /></td>
        <td class="producto" >
          <font color="#000000"><? echo $_GET["cantidad1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["cantidad9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["cantidad10"]; ?></font> <br /></td>
        <td class="cliente"  >
          <font color="#000000"><? echo $_GET["nombreproducto1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["nombreproducto2"]; ?> </font><br />
          <font color="#000000"><? echo $_GET["nombreproducto3"]; ?> </font><br />
          <font color="#000000"><? echo $_GET["nombreproducto4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["nombreproducto5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["nombreproducto6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["nombreproducto7"]; ?></font><br />
          <font color="#000000"><? echo $_GET["nombreproducto8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["nombreproducto9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["nombreproducto10"]; ?> </font><br /></td>
        <td class="cliente"  > 
          <font color="#000000"><? echo $_GET["marca1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca7"]; ?></font> <br />
          <font color="#000000"> <? echo $_GET["marca8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["marca9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["marca10"]; ?></font> <br /></td>
        <td class="cliente"  >
          <font color="#000000"> <? echo $_GET["modelo1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["modelo9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["modelo10"]; ?></font> <br /></td>
        <td class="cliente"  >
          <font color="#000000"><? echo $_GET["valorneto2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["valorneto9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valorneto10"]; ?></font> <br /></td>
        <td class="cliente"  >
          <font color="#000000"><? echo $_GET["valoriva1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva5"]; ?></font> <br />
          <font color="#000000"><? echo $_POST["valoriva6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["valoriva9"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valoriva10"]; ?></font> <br /></td>
        <td class="cliente"  >
          <font color="#000000"> <? echo $_GET["valortotal1"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal2"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal3"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal4"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal5"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal6"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal7"]; ?></font> <br />
          <font color="#000000"><? echo $_GET["valortotal8"]; ?></font> <br /> 
          <font color="#000000"><? echo $_GET["valortotal9"]; ?></font> <br />
          <font color="#000000"><? echo $_POST["valortotal10"]; ?></font> <br /></td>
      </tr>
      </table>
  </div>
  <div align="right">
    <table width="269" border="5" bordercolor="#0000FF">
      <tr>
        <td width="101" class="total"><? echo $sf25;?></td>
        <td width="144" class="total"> <font color="#000000"><? echo $_GET["valornetototal"]; ?></font> <br /></td>
      </tr>
      <tr>
        <td  class="total"><? echo $sf26;?></td>
        <td  class="total"><font color="#000000"><? echo $_GET["valorivatotal"]; ?></font></td>
      </tr>
      <tr>
        <td  class="total"><? echo $sf27;?></td>
        <td  class="total"><font color="#000000"><? echo $_GET["valortotaltotal"]; ?></font></td>
      </tr>
    </table>
    <div align="center">
      <table width="70" border="5" bordercolor="#009900">
        <tr>
          <td width="68"  class="button"><input name="Enviar" type="submit" value="Guardar" /></td>
          <td width="68"  class="button"><input type="button" name="imprimir" value="Imprimir" onclick="window.print();"></td>  
        </tr>
      </table>
</div></div>
</form>
</body>
</html>
