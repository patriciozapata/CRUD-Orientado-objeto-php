
<?php
    require_once ("conexion.php");
    $obj = new Conectar();
    $conexion = $obj->Conexion();
    $id = $_GET['id'];

    $sql = "select articulo_titulo,descripcion_ar,ciudad from articulos where id='$id'";

    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
<div class="container">


        <form method="post" action="procesos/editar.php">
        <input type="text" hidden="" value="<?php echo $id?>" name="id">
            Articulo
        <input type="text" name="name" value="<?php echo $ver[0] ?>">
        <br>
        descripcion_ar
        <input type="text" name="descripcion" value="<?php echo $ver[1] ?>">
        <br>
        ciudad
        <input type="text" name="ciudad" value="<?php echo $ver[2] ?>">
            <br>
        <button>Agregar</button>

        </form>    
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>