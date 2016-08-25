<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php



            function calcular($calculo  ) {


            if (!strcmp("Suma",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1+$numero2;
            echo "<p class='estilo'>el resultado es: $resultado </p>";
            }
            if (!strcmp("Resta",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1-$numero2;
              echo "<p class='estilo'>el resultado es: $resultado </p>" ;
            }
            if (!strcmp("Multiplicación",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1*$numero2;
              echo "<p class='estilo'>el resultado es: $resultado </p>";
            }
            if (!strcmp("División",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1/$numero2;
              echo "<p class='estilo'>el resultado es: $resultado</p>";
            }
            if (!strcmp("Módulo",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1%$numero2;
              echo "<p class='estilo'>el resultado es: $resultado</p>";
            }
            if (!strcmp("Incremento",$calculo)) {
              global $numero1;
              $numero1++;
              $resultado=$numero1;
              echo "<p class='estilo'>el resultado es: $resultado</p>";
            }
            if (!strcmp("Decremento",$calculo)) {
              global $numero1;
              //global $numero2;
              $numero1--;
              $resultado=$numero1;
              echo "<p class='estilo'>el resultado es: $resultado</p>";
            }
                      }

     ?>
  </body>
</html>
