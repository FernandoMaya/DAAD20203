<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="get" action="cuentas.php">
  <label>username
  <input type="varchar" name="username" value="<?php print($_REQUEST['Username']);?>"/>
  </label>
  <p>
    <label>password
    <input type="varchar" name="password" value="<?php print($_REQUEST['Password']);?>"/>
    </label>
  </p>
  <p>
    <label>tipo
    <input type="smallint" name="tipo" value="<?php print($_REQUEST['Tipo']);?>"/>
    </label>
</p>
  <p>
    <label>status
    <input type="boolean" name="status" value="<?php print($_REQUEST['Status']);?>"/>
    </label>
  </p>
  <p>
    <label>activo
    <input type="tinyint" name="activo" value="<?php print($_REQUEST['Activo']);?>"/>
    </label>
  </p>
  <p>
    <label>intentos
    <input type="smallint" name="intentos" value="<?php print($_REQUEST['Intentos']);?>"/>
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
