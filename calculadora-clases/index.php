<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="procesar2.php">
        <label for="xd">valor1</label>
        <input type="text" name="val1">
        <br>
        <label for="xd">valor2</label>
        <input type="text" name="val2">
        <br>
        <select name="opcion" id="">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select>
        <br>
        <button>calcular</button>
    </form>

</body>
</html>