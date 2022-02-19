<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi Conversor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-
scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    

</head>
<body>

    <header>
        <h1>MiConversor</h1>
    </header>

     <section>
        <article>
           <form method="POST">
              
            <input type="text" id="cantidad" name="cantidad" />

            <select class="form-select" id="valor1" name="valor1">
             <option selected value="1">USD($) Dólares americanos</option>
             <option value="2">EUR(€) Euro</option>
              <option value="3">JPY(¥) Yen Japonés</option>
              <option value="4">GBP(£) Libra Esterlina</option>
            </select>

            <input type="submit" id="convertir" name="submit" value="▼▲" class="submit" />

            <select class="form-select" id="valor2" name="valor2">
             <option value="1">USD($) Dólares americanos</option>
             <option selected value="2">EUR(€) Euro</option>
             <option value="3">JPY(¥) Yen Japonés</option>
             <option value="4">GBP(£) Libra Esterlina</option>
            </select>

            </form>
        </article>


    <article id= "resultados">
    <?php
         
     
     if (empty($_POST['cantidad'])){ //comprobamos si está vacío el campo que viene del formulario
         echo "\t\tNo se ha ingresado una cantidad.";
     }
     
     else{
         $ingresado=$_POST['cantidad']; //metemos dentro de la variable ingresado, el valor introducido
         $ingresado= str_replace(",",".",$ingresado); //cambiamos las comas por los puntos

         $valor1=$_POST['valor1'];
         $valor2=$_POST['valor2'];

             if (!is_numeric($ingresado)){ //comprobamos que sea un valor numérico el valor introducido
                 
                 echo "\t<tr class=\"odd\">\n";
                 echo "\t\t No se ha introducido un valor numerico. "; 
             }
             else{

                if($valor1 == $valor2){ //Si selecciona misma moneda
                 echo "\t\t Seleccionar diferentes divisas para convertir. ";
                }

                else{
                
                //conversion de euros a dolares
                if($valor1 == "2" && $valor2 == "1"){
                    $cambio=$ingresado / 0.88; 
                    echo "\t\t" . $ingresado . " Euros \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Dólares americanos <br>" . "\n\n","<br>" ;
                }
                
                //conversion de dolares a euros
                if($valor1 == "1" && $valor2 == "2"){
                 $cambio=0.88*$ingresado; 
                 echo "\t\t" . $ingresado . " Dólares Americanos \n\n","<br>" ;
                 echo "=","<br>";
                 echo "\t\t\n" . number_format($cambio,2,',','.')." Euros <br>" . "\n\n","<br>" ;
                }

                //conversion de dolares a yenes
                if($valor1 == "1" && $valor2 == "3"){
                 $cambio=115.00*$ingresado; 
                 echo "\t\t" . $ingresado . " Dólares Americanos \n\n","<br>" ;
                 echo "=","<br>";
                 echo "\t\t\n" . number_format($cambio,2,',','.')." Yenes <br>" . "\n\n","<br>" ;
                }

                //conversion de yenes a dolares
                if($valor1 == "3" && $valor2 == "1"){
                    $cambio=$ingresado / 115.00; 
                    echo "\t\t" . $ingresado . " Yenes \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Dólares Americanos <br>" . "\n\n","<br>" ;
                }

                //conversion de dolares a libras
                if($valor1 == "1" && $valor2 == "4"){
                    $cambio=0.74*$ingresado; 
                    echo "\t\t" . $ingresado . " Dólares Americanos \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Libras esterlinas <br>" . "\n\n","<br>" ;
                }

                //conversion de libras a dolares
                if($valor1 == "4" && $valor2 == "1"){
                    $cambio=$ingresado / 0.74; 
                    echo "\t\t" . $ingresado . " Libras esterlinas \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Dólares Americanos <br>" . "\n\n","<br>" ;
                }

                //conversion de yenes a libras
                if($valor1 == "3" && $valor2 == "4"){
                    $cambio=$ingresado * 0.0064; 
                    echo "\t\t" . $ingresado . " Yenes \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Libras esterlinas <br>" . "\n\n","<br>" ;
                }

                //conversion de libras a yenes
                if($valor1 == "4" && $valor2 == "3"){
                    $cambio=$ingresado / 0.0064; 
                    echo "\t\t" . $ingresado . " Libras esterlinas \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Yenes <br>" . "\n\n","<br>" ;
                }

                //conversion de yenes a euros
                if($valor1 == "3" && $valor2 == "2"){
                    $cambio=$ingresado* 0.0077; 
                    echo "\t\t" . $ingresado . " Yenes \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Euros <br>" . "\n\n","<br>" ;
                }

                //conversion de euros a yenes
                if($valor1 == "2" && $valor2 == "3"){
                    $cambio=$ingresado / 0.0077; 
                    echo "\t\t" . $ingresado . " Euros \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Yenes <br>" . "\n\n","<br>" ;
                }

                //conversion de libras a euros
                if($valor1 == "4" && $valor2 == "2"){
                    $cambio=$ingresado * 1.20; 
                    echo "\t\t" . $ingresado . " Libras esterlinas \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Euros <br>" . "\n\n","<br>" ;
                }

                //conversion de euros a libras
                if($valor1 == "2" && $valor2 == "4"){
                    $cambio=$ingresado / 1.20; 
                    echo "\t\t" . $ingresado . " Euros \n\n","<br>" ;
                    echo "=","<br>";
                    echo "\t\t\n" . number_format($cambio,2,',','.')." Libras esterlinas <br>" . "\n\n","<br>" ;
                }

                }
            }
             
        }

     ?>
    </article>
    </section>
</body>
</html>