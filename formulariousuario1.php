<?
	include("resources/sf_properties.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="Estilos/Estilologin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><? echo $rcli; ?></title>
<script>
function ValidaMail(email) {
var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
return exr.test(email);
}
if(!ValidaMail(f.campo.value)) {
alert("La dirección de EMail es incorrecta !!");
}
function validar(nuevoformulario)
{
	if(nuevoformulario.rut.value=='')
	{
		alert ('Error: Debe ingresar su RUT');
		nuevoformulario.rut.focus();
		return false;
	}
     num=parseInt(nuevoformulario.rut.value)
	 if(isNaN(num))
	 {
		 alert('Error: Su RUT debe ser numerico');
		 nuevoformulario.rut.focus();
		 return false;
	 }

     if(nuevoformulario.contrasena.value=='')
	 {
		 alert ('Error: Debe ingresar su contraseña');
		 nuevoformulario.contrasena.focus();
		 return false;
	 }
	 if(nuevoformulario.nombre.valie=='')
	 {
		 alert ('Error: Debe ingresar su nombre');
		 nuevoformulario.nombre.focus();
		 return false;
	 }
	 if(nuevoformulario.apellido.value=='')
	 {
		 alert('Error: Debe ingresar su apellido');
		 nuevoformulario.apellido.focus();
		 return false;
	 }	 
	 if(nuevoformulario.direccion.value=='')
	 {
		 alert('Error: Debe ingresar su direccion');
		 nuevoformulario.direccion.focus();
		 return false;
	 }
	  if(nuevoformulario.dia.value=='Dia')
	 {
		 alert ('Error: Debe ingresar su dia de nacimiento');
		 nuevoformulario.dia.focus();
		 return false;
	 }
	 if(nuevoformulario.mes.value=='Mes')
	 {
		 alert('Error: Debe ingresar su Mes de nacimiento');
		 nuevoformulario.mes.focus();
		 return false;
	 }	 
	 if(nuevoformulario.ano.value=='Año')
	 {
		 alert('Error: Debe ingresar su año de nacimiento');
		 nuevoformulario.ano.focus();
		 return false;
	 }
	 if(nuevoformulario.email.value=='')
	 {
		 alert('Error: Debe ingresar su Email');
		 nuevoformulario.email.focus();
		 return false;
	 }
     if(ValidaMail(nuevoformulario.email.value))
	{
		return true;
	}else{
		alert("Error Su email no es valido");
		nuevoformulario.email.focus();
		return false;

	} 
	    return true;
}
</script>
<style type="text/css">
body {
	background-color: #000;
}
body,td,th {
	color: #FFF;
}
</style>
</head>
<body>
<form action="guardardatosusuario1.php" name="nuevoformulario" method="GET" onSubmit="return validar(nuevoformulario)">
<div align="center" class="usuario">
  <p><? echo $tfo;?></p>
</div>
<div align="center">
  <table width="700" border="10" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF3300">
    <tr>
      <td width="386" height="24" class="logines"><? echo $rut;?></td>
      <td width="198"><input name="rut" type="text" size="33"></td>
      </tr>
    <tr>
      <td width="386" height="24" class="logines"><? echo $cnt;?></td>
      <td><input name="contrasena" type="password" size="33"></td>
    </tr>
    <tr>
      <td height="24" class="logines"><? echo $inom;?></td>
      <td><input name="nombre" type="text" size="33"></td>
      </tr>
    <tr>
      <td height="24" class="logines"><? echo $ap;?> </td>
      <td><input name="apellido" type="text" size="33"></td>
      </tr>
    <tr>
      <td height="24" class="logines"><? echo $idir;?></td>
      <td><input name="direccion" type="text" size="33"></td>
      </tr>
    <tr>
      <td height="24" class="logines"><? echo $nac;?></td>
      <td><select name="dia" size="1">
       <option>Dia</option>
            <option><?
				
				for($i=1; $i<32; $i++)
				{
					echo "<option value="."'$i'>".$i."</option>";
				}
				
			?></option>
     
      </select>
      </td>
      <td width="200"><select name="mes" size="1" whith="5">
     <option>Mes</option>
	 <option><?
				
				for($i=0; $i<13; $i++)
				{
					echo "<option value="."'$reg[$i]'>".$reg[$i]."</option>";
				}
				
			?></option>
      
      </select>
      </td>
      <td width="70"><select name="ano">
         <option>Año</option>
      <?
				
				for($i=1930; $i<2012; $i++)
				{
					echo "<option value="."'$i'>".$i."</option>";
				}
				
			?>
      </select>
      </td>
      </tr>
    <tr>
      <td class="logines"><? echo $em;?></td>
      <td><input name="email" type="text" size="33"></td>
    </tr>
    <tr>
    <td><div align="center">
      <input type="submit" value="Guardar">
    </div></td>
    <td><div align="center">
      <input type="reset" value="Limpiar">
    </div></td>
    <tr>  
</table
></div>
</form>
</div>
<div align="center">
</div>
</body>
</html>