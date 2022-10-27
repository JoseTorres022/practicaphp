<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>

</head>

<body>
    <?php
    //utilizando el include
    include("../practicaphp/index.html");
    echo "<br>Hola Mundo", "Hola mundo dos", "hola mundo tres<br>";
    print "hola mundo";
    print "hola mundo";

    $clase = "clase-h1-prueba";
    $a = 1;
    if ($a == 1) {
        echo "<br><h1 style='background-color: red;' >Si</h1>";
        print "<br> <h1 class='" . $clase . "'>Si</h1>";
    } else {
        echo "NO";
    }
    ?>
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymus"></script>
    <script defer src="../../JS/jquery-3.6.0.min.js"></script>
</body>

</html>