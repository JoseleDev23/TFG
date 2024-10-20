<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error en el Registro</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #D6C2A4;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            text-align: center;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>¡Error en el Registro!</h3>
                        <?php
                        // Obtener el mensaje de error de la URL
                        $error_message = $_GET["error"] ?? "Ocurrió un error durante el proceso de registro. Por favor, inténtalo nuevamente.";

                        // Imprimir el mensaje de error
                        echo "<p>$error_message</p>";
                        ?>
                        <a href="formulario_registro.php" class="btn btn-primary">Volver al Formulario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>