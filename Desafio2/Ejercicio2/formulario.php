<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulario</title>
    <?php 
    require_once "Libro.php";
    require_once "data.php";
    ?>
</head>
<body class="container">
    <!--<form action=""  method="post">
         Cantidad de libros a insertar 
        <label>¿Cuantos libros ingresará? </label>
        <input type="number" name="cant" placeholder="Cantidad">
        <input type="submit" name="valores" value="Ingresar Datos">
    </form>
    <br><br>-->
    <header style="font-size:25px">Ingreso de libros</header>
    <form action="validacion.php" method="post">
        <br>
        <div class="form-group">
          <label for="NombreAutor">Autor:</label>
          <input type="text" name="autor" class="form-control" id="autor"  placeholder="Apellidos, Nombres">
        </div>   
        <br>
        <div class="form-group">
          <label for="TituloLibro">Título del libro:</label>
          <input type="text" name="titulo" class="form-control" id="titulo"  placeholder="Escribir sin usar comillas">
        </div> 
        <br>
        <div class="row">
            <div class="form-group col">
            <label for="NumeroEdicion">Número de edición:</label>
            <input type="text" name="edicion" class="form-control" id="edicion" placeholder="Número de edición">
            </div>
            <div class="form-group col">
            <label for="Anio">Año de la edición:</label>
            <input type="text" name="anio" class="form-control" id="anio" placeholder="Año">
            </div>
            <div class="form-group col">
            <label for="Paginas">Número de páginas:</label>
            <input type="text" name="numeropag" class="form-control" id="numeropag" placeholder="Cantidad de páginas">
            </div>
        </div>  
        <br>
        <div class="form-group">
          <label for="LugarPublicacion">Lugar de la publicación:</label>
          <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Municipio, Departamento">
        </div>
        <br>
        <div class="form-group">
          <label for="Editorial">Editorial:</label>
          <input type="text" name="editorial" class="form-control" id="editorial" placeholder="Editorial">
        </div>
        <br>
        <div class="form-group">
          <label for="Notas">Notas:</label>
          <input type="text" name="notas" class="form-control" id="notas" placeholder="Información complementaria">
        </div>
        <br>
        <div class="form-group">
          <label for="Isbn">ISBN:</label>
          <input type="text" name="isbn" class="form-control" id="isbn" placeholder="97(8-9)-12345-123457-123456-1">
        </div>
        <br>
        <button type="submit" name="enviar" class="btn btn-primary">Añadir Libro</button>
    </form>
</body>
</html>