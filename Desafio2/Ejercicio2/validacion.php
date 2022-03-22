<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inventario</title>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_POST['enviar'])){
                echo "Hola, es una prueba";
                echo "<br>";
                echo "<a href='formulario.php'>Ingresar otro libro </a>";
            }
        ?>
    </div>
</body>
</html>

<?php
function validacion($autor, $titulo, $numedicion, $anioedicion, $numpag, $lugar, $editorial, $notas, $isbn){
    $val = true;
    if(preg_match("/^([a-zA-Z]+)(\s[a-zA-Z]+)(,\s[a-zA-Z]+)(\s[a-zA-Z]+)*$/",$autor)){

    }
}
?>