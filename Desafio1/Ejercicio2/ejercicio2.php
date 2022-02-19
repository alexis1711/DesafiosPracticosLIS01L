<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" />
    <title>Calculo de amortización</title>
</head>
<body>
    <header>
        <h1>Calculadora de préstamos</h1>
    </header>
    <section>
        <article>
            <div class="contenedor">
                <?php
                    if(isset($_POST['enviar'])):
                        $metodo = $_POST['metodo'];
                        $fecha = $_POST['fecha'];
                        $importe = $_POST['importe'];
                        $periodo = $_POST['periodo'];
                        $plazo = $_POST['plazo'];
                        $interes1 = $_POST['interes'];
                        $interes = $_POST['interes']/100;
                        $cont = 1;
                        echo "<table><tr><td>Fecha del prestamo:\n$fecha</td>
                        <td>Metodo:\n$metodo</td></tr>
                        <tr><td>Monto: $importe</td><td>Interés:".$interes1."%</td></tr>
                        <tr><td>Periodo: $periodo</td><td>Plazo: $plazo</td></tr></table>";
                        if($metodo=="frances"):
                            echo "<Table id = \"hor-zebra\" summary=\"Datos recibidos del formulario\">";
                            echo "<thead>\n<tr class=\"thead\">\n<th scope=\"col\">Periodo</th>\n<th scope=\"col\">Cuota</th>";
                            echo "<th scope=\"col\">Capital</th>\n<th scope=\"col\">Interés</th>\n<th scope=\"col\">Saldo</th>";
                            echo "<tbody>";
                            $parte1 = pow((1+$interes),-$plazo);
                            $cuota = ($importe)*($interes/(1-$parte1));
                            while($importe>0):
                                if($importe>$cuota):
                                    $int = $importe * $interes;
                                    if($cont % 2 == 0):
                                        echo "\t<tr class=\"odd\">\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        $capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = $importe - $capital;
                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        $cont++;
                                        echo "\t</tr>\n";
                                    else:
                                        echo "\t<tr class=\"od\">\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        $capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = $importe - $capital;
                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        $cont++;
                                        echo "\t</tr>\n";
                                    endif;
                                else:
                                    $int = $importe * $interes;
                                    if($cont % 2 == 0):
                                        echo "\t<tr class=\"odd\">\n";
                                        echo "\t<tr>\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        $capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = 0;
                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        $cont++;
                                        echo "\t</tr>\n";
                                    else:
                                        echo "\t<tr class=\"od\">\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        $capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = 0;
                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        $cont++;
                                        echo "\t</tr>\n";
                                    endif;
                                endif;
                            endwhile;
                            echo "</tbody>\n</table>";
                            echo "</tbody>\n</table>";
                            echo "<p><a href=\"ejercicio2.php\" class=\"button-link\">Hacer otro calculo</a>";
                            echo "</div>";
                        elseif($metodo=="aleman"):
                            //$cont=0;
                            echo "<Table id = \"hor-zebra\" summary=\"Datos recibidos del formulario\">";
                            echo "<thead>\n<tr class=\"thead\">\n<th scope=\"col\"><center>Periodo</center></th>\n<th scope=\"col\"><center>Cuota</center></th>";
                            echo "<th scope=\"col\"><center>Capital</center></th>\n<th scope=\"col\"><center>Interés</center></th>\n<th scope=\"col\"><center>Saldo</center></th>";
                            echo "<tbody>";
                            $capital = $importe / $plazo;
                            //$parte1 = pow((1+$interes),-$plazo);
                            //$cuota = ($importe)*($interes/(1-$parte1));
                            while($importe>0):
                                //if($importe>$cuota):
                                    $int = $importe * $interes;
                                    $cuota = $int + $capital;
                                    if($cont % 2 == 0):
                                        echo "\t<tr class=\"odd\">\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        
                                        //$capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = $importe - $capital;
                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        
                                        $cont++;
                                        echo "\t</tr>\n";
                                    else:
                                        echo "\t<tr  class=\"od\">\n";
                                        echo "\t\t<td>\n$cont\n</td>\n";
                                        echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                        //$capital = $cuota - $int;
                                        echo "\t\t\t<td>\n$".round($capital,2)."\n</td>\n";
                                        echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                        $importe = $importe - $capital;

                                        echo "\t\t<td>\n$".round($importe,2)."\n</td>\n";
                                        $cont++;
                                        echo "\t</tr>\n";
                                    endif;
                            endwhile;
                            
                            echo "</tbody>\n</table>";
                            echo "</tbody>\n</table>";
                            echo "<p><a href=\"ejercicio2.php\" class=\"button-link\">Hacer otro calculo</a>";
                            echo "</div>";
                        elseif($metodo=="americano"):
                            echo "<Table id = \"hor-zebra\" summary=\"Datos recibidos del formulario\">";
                            echo "<thead>\n<tr class=\"thead\">\n<th scope=\"col\"><center>Periodo</center></th>\n<th scope=\"col\"><center>Cuota</center></th>";
                            echo "<th scope=\"col\"><center>Capital</center></th>\n<th scope=\"col\"><center>Interés</center></th>\n<th scope=\"col\"><center>Saldo</center></th>";
                            echo "<tbody>";
                            $CK=0;
                            $cuota = $importe * $interes;
                            $a = $importe + $cuota;
                            while($cont<=$plazo):
                                $int = $importe * $interes;
                                if($cont % 2 == 0):
                                    echo "\t<tr class=\"odd\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    
                                    if($cont<5):
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t\t<td>\n0\n</td>\n";
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t<td>\n$$importe\n</td>\n";
                                        echo "\t</tr>\n";
                                    else:
                                        $cuota = $cuota + $importe;                                     
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        $cuota = $cuota - $importe;
                                        echo "\t\t\t<td>\n$$importe\n</td>\n";
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t<td>\n0\n</td>\n";
                                        echo "\t</tr>\n";
                                    endif;
                                    $cont++;
                                else:
                                    echo "\t<tr class=\"od\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    
                                    if($cont<5):
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t\t<td>\n0\n</td>\n";
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t<td>\n$$importe\n</td>\n";
                                        echo "\t</tr>\n";
                                    else:
                                        $cuota = $cuota + $importe;                                     
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        $cuota = $cuota - $importe;
                                        echo "\t\t\t<td>\n$$importe\n</td>\n";
                                        echo "\t\t<td>\n$$cuota\n</td>\n";
                                        echo "\t\t<td>\n0\n</td>\n";
                                        echo "\t</tr>\n";
                                    endif;
                                    $cont++;
                                endif;
                            endwhile;
                            echo "</tbody>\n</table>";
                            echo "</tbody>\n</table>";
                            echo "<p><a href=\"ejercicio2.php\" class=\"button-link\">Hacer otro calculo</a>";
                            echo "</div>";
                        elseif($metodo=="simple"):
                            echo "<Table id = \"hor-zebra\" summary=\"Datos recibidos del formulario\">";
                            echo "<thead>\n<tr class=\"thead\">\n<th scope=\"col\">Periodo</th>\n<th scope=\"col\">Cuota</th>";
                            echo "<th scope=\"col\">Capital</th>\n<th scope=\"col\">Interés</th>\n<th scope=\"col\">Saldo</th>";
                            echo "<tbody>";
                            $CK=0;
                            $cuota = $importe * $interes * $plazo;
                            $int = $importe * $interes;
                            while($importe>0):
                                
                                if($cont % 2 == 0):
                                    echo "\t<tr class=\"odd\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    echo "\t\t<td>\n$$cuota\n</td>\n";
                                    $capital = $cuota - $int;
                                    echo "\t\t\t<td>\n$".$capital."\n</td>\n";
                                    echo "\t\t<td>\n$$int\n</td>\n";
                                    $importe = $importe - $capital;
                                    echo "\t\t<td>\n$$importe\n</td>\n";
                                    $cont++;
                                    echo "\t</tr>\n";
                                else:
                                    echo "\t<tr class=\"od\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    echo "\t\t<td>\n$$cuota\n</td>\n";
                                    $capital = $cuota - $int;
                                    echo "\t\t\t<td>\n$".$capital."\n</td>\n";
                                    echo "\t\t<td>\n$$int\n</td>\n";
                                    $importe = $importe - $capital;
                                    echo "\t\t<td>\n$$importe\n</td>\n";
                                    $cont++;
                                    echo "\t</tr>\n";
                                endif;
                            endwhile;
                            echo "</tbody>\n</table>";
                            echo "</tbody>\n</table>";
                            echo "<p><a href=\"ejercicio2.php\" class=\"button-link\">Hacer otro calculo</a>";
                            echo "</div>";
                        elseif($metodo=="compuesto"):
                            echo "<Table id = \"hor-zebra\" summary=\"Datos recibidos del formulario\">";
                            echo "<thead>\n<tr class=\"thead\">\n<th scope=\"col\"><center>Periodo</center></th>\n<th scope=\"col\"><center>Cuota</center></th>";
                            echo "<th scope=\"col\"><center>Capital</center></th>\n<th scope=\"col\"><center>Interés</center></th>\n<th scope=\"col\"><center>Saldo</center></th>";
                            echo "<tbody>";
                            $cuota = $importe * $interes * $plazo;
                            $int = $importe * $interes;
                            $capital = $cuota - $int;
                            $saldo1 = $importe;
                            while($importe>0):
                                
                                $int = $saldo1 * $interes;                    
                                $cuota = $capital + $int;
                                if($cont % 2 == 0):
                                    echo "\t<tr class=\"odd\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                    
                                    echo "\t\t\t<td>\n$".$capital."\n</td>\n";
                                    echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                    $importe = $importe - $capital;
                                    echo "\t\t<td>\n$$importe\n</td>\n";
                                    $cont++;
                                    echo "\t</tr>\n";
                                else:
                                    echo "\t<tr class=\"od\">\n";
                                    echo "\t\t<td>\n$cont\n</td>\n";
                                    echo "\t\t<td>\n$".round($cuota,2)."\n</td>\n";
                                    //$capital = $cuota - $int;
                                    echo "\t\t\t<td>\n$".$capital."\n</td>\n";
                                    echo "\t\t<td>\n$".round($int,2)."\n</td>\n";
                                    $importe = $importe - $capital;
                                    echo "\t\t<td>\n$$importe\n</td>\n";
                                    $cont++;
                                    echo "\t</tr>\n";
                                endif;
                                $saldo1 = $saldo1 + $int;
                            endwhile;
                            echo "</tbody>\n</table>";
                            echo "</tbody>\n</table>";
                            echo "<p><a href=\"ejercicio2.php\" class=\"button-link\">Hacer otro calculo</a>";
                            echo "</div>";
                        endif;               
                    else:
                ?>
                    <div class="encabezado">
                        Calculadora de préstamos
                        <br><br>
                    </div>
                    <div class="formulario">
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                            <label>Tipo de metodo:  </label>
                            <select name="metodo">
                                <option value="frances" selected>Francés</option>
                                <option value="aleman">Alemán</option>
                                <option value="americano">Americano</option>
                                <option value="simple">Simple</option>
                                <option value="compuesto">Compuesto</option>
                            </select><br><br>
                            <label>Fecha de desembolso:  </label>
                            <input type="date" id="fecha" name="fecha" /><br><br>
                            <label>Importe del prestamo:  </label>
                            <input type="number" min="1" class="form-control" data-field="amount" name="importe" id="importe" /><br><br>
                            <label>Periodo:  </label>
                            <select name="periodo">
                                <option value="diario" selected>Diario</option>
                                <option value="semanal">Semanal</option>
                                <option value="quincenal">Quincenal</option>
                                <option value="mensual">Mensual</option>
                                <option value="anual">Anual</option>
                            </select><br><br>
                            <label>Interes:  </label>
                            <input type="decimal" name="interes" id="interes"/><br><br>
                            <label>Plazo:  </label>
                            <input type="number" min="1" name="plazo" id="plazo" />
                            <label>(Según el periodo)</label>
                            <br><br>
                            <div class="divisor"></div>
                            <input type="submit" class="button-link" value="Enviar" name="enviar" id="enviar" />
                        </form>
                    </div>
            </div>

            <?php
                endif;
            ?>
        </article>
    </section>
</body>
</html>