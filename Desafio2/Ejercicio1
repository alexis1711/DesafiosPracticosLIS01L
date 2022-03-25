<!DOCTYPE html>
<html>
	<head>
		<title>Academia de Idiomas</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

    <div class="container overflow-hidden">
    <div class="row gy-5">
      <div class="col">
        <div class="container p-3 my-5 bg-light text-black">
    <h1>Academia de Idiomas</h1>

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#A">Arreglo asociativo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#B">Arreglo multidimensional anidado</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#C">Arreglo multidimensional asociativo</a> 
    </li>
    </ul>


<section id="A">
    <div class="container overflow-hidden">
        <div class="row gy-5">
          <div class="col">
    <div class="container p-3 my-5 bg-warning text-black">
    <h2>A. Arreglo asociativo</h2>
		<?php 
        mostrarDatos(asociativos()); 
        ?>
</section>

<section id="B">
    <div class="container overflow-hidden">
        <div class="row gy-5">
          <div class="col">
    <div class="container p-3 my-5 bg-primary text-white">
		<h2>B. Arrreglo multidimensional anidado</h2>
		<?php
		mostrarDatos(anidado());
		?>
</section>

<section id="C">
    <div class="container overflow-hidden">
        <div class="row gy-5">
          <div class="col">
    <div class="container p-3 my-5 bg-info text-black">
		<h2>C. Arreglo multidimensional asociativo</h2>

		<?php
        mostrarDatos(multiAsociativo());
        ?>
</section>


        <?php

            function asociativos()
            {
                $numAlumnos[0][0] = 25;
                $numAlumnos[0][1] = 10;
                $numAlumnos[0][2] = 8;
                $numAlumnos[0][3] = 12;
                $numAlumnos[0][4] = 30;
                $numAlumnos[0][5] = 90;

                $numAlumnos[1][0] = 15;
                $numAlumnos[1][1] = 5;
                $numAlumnos[1][2] = 4;
                $numAlumnos[1][3] = 8;
                $numAlumnos[1][4] = 15;
                $numAlumnos[1][5] = 25;

                $numAlumnos[2][0] = 10;
                $numAlumnos[2][1] = 2;
                $numAlumnos[2][2] = 1;
                $numAlumnos[2][3] = 4;
                $numAlumnos[2][4] = 16;
                $numAlumnos[2][5] = 67;

                return $numAlumnos;
            }


            function anidado()
            {
                $numAlumnos1 = array(
                    array(25, 10, 8, 12, 30, 90),
                    array(15, 5, 4, 8, 15, 25),
                    array(10, 2, 1, 4, 16, 67) );

                return $numAlumnos1;
            }

            function multiAsociativo()
            {
                $numAlumnos2[0] = array(25, 10, 8, 12, 30, 90);
			    $numAlumnos2[1] = array(15, 5, 4, 8, 15, 25);
			    $numAlumnos2[2] = array(10, 2, 1, 4, 16, 67);

                return $numAlumnos2;
            }

            function mostrarDatos( $matriz )
            {
                for($j = 0; $j < 6; $j++){

                    $msg ="<br/>";
                    if($j == 0){
                        echo($msg . "Inglés: " . "<br/>");
                    } else if($j == 1) {
                        echo($msg . "Francés: ". "<br/>");
                    } else if($j == 2) {
                        echo($msg . "Mandarín: ". "<br/>");
                    } else if($j == 3){
                        echo($msg . "Ruso: ". "<br/>");
                    } else if($j == 4) {
                        echo($msg . "Portugués: ". "<br/>");
                    } else if($j == 5) {
                        echo($msg . "Japonés: ". "<br/>");
                    } 
                    
                    for($i = 0; $i < 3; $i++) {
                        $nivel = "Nivel ";
                        if($i == 0){
                            echo($nivel = $nivel . "básico: "); 
                        } else if($i == 1) {
                            echo($nivel = $nivel . "medio: ");
                        } else {
                            echo($nivel = $nivel . "avanzado: ");
                        }
                         echo($matriz[$i][$j] . "<br/>");
                        }
                    }
                }
		?>

	</body>
</html>	
