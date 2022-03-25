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
        <header>Inventario de Libros</header>
        <?php
            require_once "data.php";
            require_once "Libro.php";
            if(isset($_POST['enviar'])){
                $autor = $_POST['autor'];
                $titulo = $_POST['titulo'];
                $numedicion = $_POST['edicion'];
                $anioedicion = $_POST['anio'];
                $numpag = $_POST['numeropag'];
                $lugar = $_POST['lugar'];
                $editorial = $_POST['editorial'];
                $notas = $_POST['notas'];
                $isbn = $_POST['isbn'];
                //$lista = array();
                if(validacion($autor,$titulo,$numedicion,$anioedicion,$numpag,$lugar,$editorial,$notas,$isbn)==true){
                    $d = new Data();
                    $obj = $d->getLibros($autor,$titulo,$numedicion,$anioedicion,$numpag,$lugar,$editorial,$notas,$isbn);
                    $lista=array();
                    array_push($lista,$obj);
                    echo "<hr>";
                    foreach($lista as $li){
                        echo "<br>";
                        echo "<b>Autor: </b>".$li->autor;
                        echo "<br>";
                        echo "<b>Titulo: </b>".$li->titulo;
                        echo "<br>";
                        echo "<b>Edición Número: </b>".$li->numedicion;
                        echo "<br>";
                        echo "<b>Edición Año: </b>".$li->anioedicion;
                        echo "<br>";
                        echo "<b>Paginas: </b>".$li->numpag;
                        echo "<br>";
                        echo "<b>Lugar: </b>".$li->lugar;
                        echo "<br>";
                        echo "<b>Editorial: </b>".$li->editorial;
                        echo "<br>";
                        echo "<b>Notas: </b>".$li->notas;
                        echo "<br>";
                        echo "<b>ISBN: </b>".$li->isbn;
                        echo "<hr>";                    
                    }
                    echo "Datos Correctos\n<br>";
                    echo "<a href='formulario.php'>Ingresar datos nuevos</a>";
                }
                else{
                    echo "Revise los datos ingresados e intentelo nuevamente";
                    echo "<a href='formulario.php'>Ingresar datos</a>";
                }
            }
        ?>
    </div>
</body>
</html>

<?php
function validacion($autor, $titulo, $numedicion, $anioedicion, $numpag, $lugar, $editorial, $notas, $isbn){
    $val = true;
    if(preg_match("/^([a-zA-Z]+)(\s[a-zA-Z]+)(,\s[a-zA-Z]+)(\s[a-zA-Z]+)*$/",$autor)){
        if(preg_match("/^[a-zA-Z0-9\s]*$/",$titulo)){
            if(preg_match("/^[0-9]*$/",$numedicion)){
                if(preg_match("/^[1-2][0-9]{3}$/",$anioedicion)){
                    if(preg_match("/^[0-9]*$/",$numpag)){
                        if(preg_match("/^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*[,\s][A-Za-zñÑáéíóúÁÉÍÓÚ\s]*$/",$lugar)){
                            if(preg_match("/^[a-zA-Z0-9\s]*$/",$editorial)){
                                if(preg_match("/^[a-zA-Z0-9\s]*$/",$notas)){
                                    if(preg_match("/^97[8-9]-[0-9]{1,5}-[0-9]{1,7}-[0-9]{1,6}-[0-9]{1}$/",$isbn)){

                                    }
                                    else{
                                        echo '<script language="javascript">alert("Ingrese un ISBN valido.");</script>';
                                        $val = false; 
                                    }
                                }
                                else{
                                    echo '<script language="javascript">alert("Ingrese un comentario valido.");</script>';
                                    $val = false;
                                }
                            }
                            else{
                                echo '<script language="javascript">alert("Ingrese un nombre valido.");</script>';
                                $val = false;
                            }
                        }
                        else{
                            echo '<script language="javascript">alert("Ingrese una dirección valida (Municipio, Departamento).");</script>';
                            $val = false;
                        }
                    }
                    else{
                        echo '<script language="javascript">alert("Ingrese un número valido.");</script>';
                        $val = false;
                    }
                }
                else{
                    echo '<script language="javascript">alert("Ingrese un año valido.");</script>';
                    $val = false;
                }
            }
            else{
                echo '<script language="javascript">alert("Ingrese una edicion valida.");</script>';
                $val = false;
            }
        }
        else{
            echo '<script language="javascript">alert("Ingrese el titulo sin comillas.");</script>';
            $val = false;   
        }
    }
    else{
        echo '<script language="javascript">alert("Ingrese de forma correcta el nombre del autor (Apellidos, Nombre).");</script>';
        $val = false; 
    }
    return $val;
}



?>