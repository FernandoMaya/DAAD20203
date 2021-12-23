<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="conductores.php">
  <label>ID
  <input type="int" name="ID" value="<?php print($_REQUEST['ID']);?>"/>
  </label>
  <p>
    <label>Foto
    <input type="varchar" name="Foto" value="<?php print($_REQUEST['Foto']);?>"/>
    </label>
  </p>
  <p>
    <label>Gruposanguineo
    <input type="varchar" name="Grupo sanguineo" value="<?php print($_REQUEST['GrupoSanguineo']);?>"/>
    </label>
  </p>
  <p>
    <label>Nombre
    <input type="varchar" name="Nombre" value="<?php print($_REQUEST['Nombre']);?>"/>
    </label>
  </p>
  <p>
    <label>FechadeNacimiento
    <input type="date" name="FechadeNacimiento" value="<?php print($_REQUEST['FechadeNacimineto']);?>"/>
    </label>
  </p>
  <p>
    <label>Direccion
    <input type="varchar" name="Direccion" value="<?php print($_REQUEST['Direccion']);?>"/>
    </label>
  </p>
  <p>
    <label>Firma
    <input type="varchar" name="Firma" value="<?php print($_REQUEST['Firma']);?>"/>
    </label>
  </p>
  <p>
    <label>Donador
    <input type="bit" name="Donador" value="<?php print($_REQUEST['Donador']);?>"/>
    </label>
  </p>
  <p>
    <label>Restricciones
    <input type="tinyint" name="Restricciones" value="<?php print($_REQUEST['Restricciones']);?>"/>
    </label>
  </p>
  <p>
    <label>Submit
    <input type="submit" name="Submit" value="Enviar" />
    </label>
</p>
</form>
</body>
</html>
