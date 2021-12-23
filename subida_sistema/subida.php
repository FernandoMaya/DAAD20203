<?php
 
	if($_Files["fichero"]["error"]) {
	echo "Se ha producido un error: " . $_Files["fichero"]["error"];
	}
	else 
		if(move_uploaded_file($_Files["fichero"]["tmp_name"], "D:\\xampp\\files\\" . $_Files["fichero"]["name"])) {
	 }
	 else {
		echo "Error, no se ha movido el fichero";
	}
		}
?>