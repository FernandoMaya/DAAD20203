<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="licencias.php">
  <label>NumerodeLicencia
  <input type="int" name="NumerodeLicencia" value="<?php print($_REQUEST['NumerodeLicencia']);?>"/>
  </label>
  <p>
    <label>Estado
    <input type="varchar" name="Estado" value="<?php print($_REQUEST['Estado']);?>"/>
    </label>
  </p>
  <p>
    <label>Vigencia
    <input type="date" name="Vigencia" value="<?php print($_REQUEST['Vigencia']);?>"/>
    </label>
  </p>
  <p>
    <label>Observaciones
    <input type="varchar" name="Observaciones" value="<?php print($_REQUEST['Observaciones']);?>"/>
    </label>
  </p>
  <p>
    <label>Conductor
    <input type="int" name="Conductor" value="<?php print($_REQUEST['Conductor']);?>"/>
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