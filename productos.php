<?php
#GRANT ALL PRIVILEGES ON test_db.* TO 'lab_php'@'localhost'
# CREATE USER 'lab_php'@'localhost' IDENTIFIED BY 'uv_2024'
#phpinfo();
$mysqli = new mysqli('localhost', 'lab_php', 'uv_2024', 'test_db');

if ($mysqli->connect_errno) {
    echo "No jaló" . $mysqli->connect_errno;
}
# echo $mysqli->host_info . "\n";
?>
<form action="" method="post">

 <select name="categoria" id="categorias">
 	<option name="comida" value = "comida"> Comida </option>
 	<option name="cocina" value = "cocina"> Cocina </option>
 	<option name="electrodomesticos" value = "electromesticos"> Electrodomesticos </option>
 	<option name="varios" value = "varios"> Varios </option>
 </select>
 <p><input type="submit" /></p>
</form>
