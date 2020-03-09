<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conexion = new PDO('mysql:host=localhost;dbname=personas', 'root','');?>
<table class="table-striped">

    <tr>
<th>id </th>
<th>nombre</th>
<th>email</th>
    </tr>
    
    

<?php foreach ($conexion->query("SELECT * FROM personas ") AS $person ){?>
<tr>
<td><?php echo $person["id"] ?></td>
<td><?php echo $person["nombre"] ?></td>
<td><?php echo $person["email"] ?></td>

</tr>
<?php
}
?>
</table>
<div>
                <center> <a href="index.php">Volver</a></center>
        </div>
</body>
</html>