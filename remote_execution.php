<?php
$output = null;
exec('ls ./notas -la', $output);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos Disponibles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            word-wrap: break-word;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%; 
            max-width: 800px;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .file-list {
            margin-bottom: 20px;
            font-size: 14px;
            color: #333;
            text-align: left;
            padding-left: 10px;
            border-left: 3px solid #4CAF50;
            word-wrap: break-word;
        }

        input[type="text"] {
            width: 80%;
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

        .file-output {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            color: #333;
            text-align: left;
            max-height: 400px; 
            overflow-y: auto;
            word-wrap: break-word;
            white-space: pre-wrap;
        }

    </style>
</head>
<body>

<h1>Archivos Disponibles</h1>

<div class="container">
    <div class="file-list">
        <?php
        foreach($output as &$file){
            echo $file . "<br>";
        }
        ?>
    </div>

    <h3>Ingresa el archivo que quieres ver:</h3>
    <form action="" method="post">
        <input type="text" name="archivo" placeholder="Nombre del archivo" required>
        <input type="submit" value="Ver Contenido">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['archivo'])) {

        $archivo = $_POST['archivo'];
        $ruta = "./notas/" . $archivo;
        echo "<h3>Contenido de: {$archivo}</h3>";

        // Verifica que el archivo existe y no es un directorio
        
		$command =  'cat ' . $ruta;
		$output_cat = [];
	    exec($command, $output_cat, $return_Var);

        if ($return_Var !== 0) {
			echo "<p>Hubo un error al intentar leer el archivo.</p>";
            } else {
                echo "<div class='file-output'>";
                foreach($output_cat as &$line){
                    echo $line . "<br>"; 
                }
                echo "</div>";
            }
        
    } else {
        echo "<p>Por favor, ingresa un archivo para ver su contenido.</p>";
    }
    ?>
</div>

</body>
</html>
