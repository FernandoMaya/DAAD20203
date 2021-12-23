<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="vehiculos.php">
  <label>Id
  <input type="int" name="Id" value="<?php print($_REQUEST['Id']);?>"/>
  </label>
  <p>
    <label>Origen
    <input type="varchar" name="Origen" value="<?php print($_REQUEST['Origen']);?>"/>
    </label>
  </p>
  <p>
    <label>Vigencia
    <input type="date" name="Vigencia" value="<?php print($_REQUEST['Vigencia']);?>"/>
    </label>
</p>
  <p>
    <label>Color
    <input type="varchar" name="Color" value="<?php print($_REQUEST['Color']);?>"/>
    </label>
  </p>
  <p>
    <label>Marca
    <input type="varchar" name="Marca" value="<?php print($_REQUEST['Marca']);?>"/>
    </label>
  </p>
  <p>
    <label>Modelo
    <input type="varchar" name="Modelo" value="<?php print($_REQUEST['Modelo']);?>"/>
    </label>
  </p>
  <p>
    <label>Tipo
    <input type="varchar" name="Tipo" value="<?php print($_REQUEST['Tipo']);?>"/>
    </label>
  </p>
  <p>
    <label>Uso
    <input type="varchar" name="Uso" value="<?php print($_REQUEST['Uso']);?>"/>
    </label>
  </p>
  <p>
    <label>NumerodeMotor
    <input type="tinyint" name="NumerodeMotor" value="<?php print($_REQUEST['NumerodeMotor']);?>"/>
    </label>
  </p>
  <p>
    <label>Serie
    <input type="tinyint" name="Serie" value="<?php print($_REQUEST['Serie']);?>"/>
    </label>
</p>
  <p>
    <label>Puerta
    <input type="varchar" name="Puerta" value="<?php print($_REQUEST['Puerta']);?>"/>
    </label>
  </p>
  <p>
    <label>Cilindro
    <input type="varchar" name="Cilindro" value="<?php print($_REQUEST['Cilindro']);?>"/>
    </label>
  </p>
  <p>
    <label>Combustible
    <input type="varchar" name="Combustible" value="<?php print($_REQUEST['Combustible']);?>"/>
    </label>
  </p>
  <p>
    <label>NIV
    <input type="varchar" name="NIV" value="<?php print($_REQUEST['NIV']);?>"/>
    </label>
  </p>
  <p>
    <label>Permiso
    <input type="varchar" name="Permiso" value="<?php print($_REQUEST['Permiso']);?>"/>
    </label>
  </p>
  <p>
    <label>Placa
    <input type="varchar" name="Placa" value="<?php print($_REQUEST['Placa']);?>"/>
    </label>
  </p>
  <p>
    <label>Propietario
    <input type="varchar" name="Propietario" value="<?php print($_REQUEST['Propietario']);?>"/>
    </label>
  </p>
  <p>
    <label>Submit
    <input type="submit" name="Submit" value="Submit" />
    </label>
</p>
</form>

</body>
</html>
