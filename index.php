<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRAR PERSONA</title>
	
</head>
<body>
    <form action="guardar.php" method="post">
        <div>
            <h1><center>INGRESE DATOS </center></h1>
        </div>
        <div class="form-group">
            <label for=""><center>nombre</center></label>
           <center> <input type="text" name="nombre"></center>
        </div>
        <div class="form-group">
            <label for=""><center>email</center></label>
            <center> <input type="text" name="email"></center>
        </div>
        <div>
           <center> <button type="submit">Guardar datos</button></center>
           <center> <a href="index.php">Volver</a></center>
        </div>
    </form>
</body>
</html>