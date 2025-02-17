<?php

$mysqli = new mysqli('172.17.0.1', 'lab_php', 'uv_2024', 'test_db');

if ($mysqli->connect_errno) {
    echo "No jaló: " . $mysqli->connect_errno;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ingresa el nombre del usuario</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <p><input type="submit" value="Buscar"></p>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['username'])) {

            //    echo $_POST['username'];
            $result = $mysqli->query("SELECT id, usuario, correo  FROM usuarios WHERE usuario ='" . $_POST['username'] . "' ") or die($mysqli->error);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "ID: " . $row['id'] . " - Usuario: " . htmlspecialchars($row['usuario']) . " - Correo: " . htmlspecialchars($row['correo']) . "<br>";
                }
            } else {
                echo "No se encontraron resultados.";
            }
        }
    } else {
        echo "Envia algo";
    }
    ?>

</div>

<?php
echo "<!-- ¿Podrás conseguir la información de algún usuario privilegiado? -->";
?>

</body>
</html>
