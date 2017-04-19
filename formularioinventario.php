<?
	include("resources/sf_properties.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function validar(inventario)
{
	if(inventario.nombreproducto.value=='')
	{
	alert ('Error debe ingresar el nombre del producto');
	inventario.nombreproducto.focus();
	return false;
	}

     if(inventario.marca.value=='')
	 {
		 alert ('Error: Debe ingresar la marca del producto');
		 inventario.marca.focus();
		 return false;
	 }
	 if(inventario.modelo.valie=='')
	 {
		 alert ('Error: Debe ingresar el modelo del producto');
		 inventario.modelo.focus();
		 return false;
	 }
	 if(inventario.cantidad.value=='')
	 {
		 alert('error: Debe ingresar la cantidad del producto');
		 inventario.cantidad.focus();
		 return false;
	 }
	 num=parseInt(inventario.cantidad.value)
	 if(isNaN(num))
	 {
		 alert('Error: Debe ingresar un valor numerico en la cantidad');
		 inventario.cantidad.focus();
		 return false;
	 }
	 
	 if(inventario.codigo.value=='')
	 {
		 alert('Error: Debe ingresar el codigo del producto');
		 inventario.codigo.focus();
		 return false;
	 }
	 numero=parseInt(inventario.codigo.value)
	 if(isNaN(numero))
	 {
		 alert('Error: Debe ingresar un codigo numerico');
		 inventario.codigo.focus();
		 return false;
	 } 
	 if(inventario.valorneto.value=='')
	 {
		 alert('Error: Debe ingresar el valor neto del producto');
		 inventario.valorneto.focus();
		 return false;
	 }
	 numero1=parseInt(inventario.valorneto.value)
	 if(isNaN(numero1))
	 {
		 alert('Error: Debe ingresar un valor neto numerico');
		 inventario.valorneto.focus();
		 return false;
	 } 
	 	 if(inventario.valoriva.value=='')
	 {
		 alert('Error: Debe ingresar el valor IVA del producto');
		 inventario.valoriva.focus();
		 return false;
	 }
	 numero2=parseInt(inventario.valoriva.value)
	 if(isNaN(numero2))
	 {
		 alert('Error: Debe ingresar el valor IVA numerico');
		 inventario.valoriva.focus();
		 return false;
	 } 
	 	 if(inventario.valortotal.value=='')
	 {
		 alert('Error: Debe ingresar el valor total del producto del producto');
		 inventario.valortotal.focus();
		 return false;
	 }
	 numero3=parseInt(inventario.valortotal.value)
	 if(isNaN(numero3))
	 {
		 alert('Error: Debe ingresar un valor total numerico');
		 inventario.valortotal.focus();
		 return false;
	 } 
	 return true;
}
</script>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $rpro; ?></title>
<style type="text/css">
body {
	background-color: #000;
}
</style>
</head>

<body>
<div align="center">
  <p class="usuario"><? echo $rpro; ?> </p>
 
  <p>&nbsp;</p>
<form action="guardardatosinventario.php" method="get" name="inventario" onsubmit="return validar(inventario)">
  <div align="center">
    <table width="305" border="10" bordercolor="#FF3300">
      <tr>
        <td width="131"><input type="text" name="nombre" id="Nombre producto" size="50" placeholder="Ingrese el nombre del producto" autofocus required></td>
      </tr>
      <tr>
        <td><input type="text" id="marca" name="marca" size="50" placeholder="Ingrese la marca del producto" autofocus required></td>
      </tr>
      <tr>
        <td><input type="text" id="modelo" name="modelo" size="50" placeholder="Ingrese el modelo del producto" autofocus required></td>
      </tr>
      <tr>
        <td><input type="text" id="cantidad" name="cantidad" size="50" placeholder="Ingrese la cantidad del producto" autofocus required></td>
      </tr>
      <tr>
        <td><input type="text" id="Codigo" name="codigo" size="50" placeholder="Ingrese el codigo del producto" autofocus required></td>
      </tr>
         <tr>
        <td><input type="text" id="valorneto" name="valorneto" size="50" placeholder="Ingrese el valor neto del producto" autofocus required></td>
      </tr>
         <tr>
        <td><input type="text" id="valoriva" name="valoriva" size="50" placeholder="Ingrese el valor iva del producto" autofocus required></td>
      </tr>
         <tr>
        <td><input type="text" id="valortotal" name="total" size="50" placeholder="Ingrese el valor total del producto" autofocus required></td>
      </tr>
    </table>
    
    <input name="Enviar" type="submit" value="Guardar">
    <input name="Restablecer" type="reset" value="Limpiar">
  </div>
</form>
</div>
</body>
</html>