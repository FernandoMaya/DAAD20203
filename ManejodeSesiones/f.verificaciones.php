<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="verificaciones.php">
  <label>ID
  <input type="int" name="ID" value="<?php print($_REQUEST['ID']);?>"/>
  </label>
  <p>
    <label>Tipo
    <input type="varchar" name="Tipo" value="<?php print($_REQUEST['Tipo']);?>/>
    </label>
  </p>
  <p>
    <label>Dictamen
    <input type="varchar" name="Dictamen" value="<?php print($_REQUEST['Dictamen']);?>"/>
    </label>
  </p>
  <p>
    <label>Periodo
    <input type="date" name="Periodo" value="<?php print($_REQUEST['Periodo']);?>"/>
    </label>
  </p>
  <p>
    <label>CentrodeVerificacion
    <input type="varchar" name="CentrodeVerificacion" value="<?php print($_REQUEST['CentrodeVerificacion']);?>"/>
    </label>
  </p>
  <p>
    <label>Fecha
    <input type="date" name="Fecha" value="<?php print($_REQUEST['Fecha']);?>"/>
    </label>
  </p>
  <p>
    <label>IddeVehiculo
    <input type="int" name="IddeVehiculo" value="<?php print($_REQUEST['IDdeVehiculo']);?>"/>
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
