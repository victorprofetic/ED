<?php

echo"<br>";
/*
  //-----------------------------------------------------------------
  echo 1 ----  if    ----------------------------<br>";
  //-----------------------------------------------------------------

  //cojamos un dado...
  $dadoJaime = rand(1, 6);
  //rand es una función gratuita del sistema, sólo hay que llamarla
  // y decirle entre qué valores queremos que nos dé el número
  //y otro para Juan

  $dadoJuan = rand(1, 6);

  if ($dadoJaime > $dadoJuan) {
  echo "Gana Jaime<br>";
  }

  if ($dadoJaime < $dadoJuan) {
  echo "Gana Juan<br>";
  }

  if ($dadoJaime = $dadoJuan) {
  echo "Han empatado<br>";
  }

  //veamos los valores:
  echo "Dado de Jaime: $dadoJaime <br> Dado de Juan: $dadoJuan <br>";

  //ESTO TIENE TRUCO!!!

  //---------------------------------------------------------------
  echo" 2 ----  if..else   ----------------------------<br>";
  //-----------------------------------------------------------------

  $dadoJaime = rand(1, 6);
  $dadoJuan = rand(1, 6);

  if ($dadoJaime > $dadoJuan) {
  echo "Gana Jaime";
  } else {
  if ($dadoJaime < $dadoJuan) {
  echo "Gana Juan";
  } else {
  echo "Han empatado";
  }
  }
  echo "<br>";

  //---------------------------------------------------------------
  echo" 3 ----  if ...elseif ..else   ----------------------------<br>";
  //-----------------------------------------------------------------
  //
  $nota = rand(1, 5);
  if ($nota == 5) {
  echo "esta muy bien!!!";
  } elseif ($nota == 4) {
  echo "está bien  ";
  } else if ($nota == 3) {
  echo "aprueba!!";
  } elseif ($nota == 2) {
  echo "suspenso";
  } else {
  echo "muy mal";
  }
 */
// Otro ejemplo

$dia = date("w");
$nombreDelDia = date("l");
echo "<br><br>Los ingleses nombran al día " . ($dia)
 . " de la semana $nombreDelDia pero hoy es ";

if ($dia == 1)
    echo "Lunes";
elseif ($dia == 2)
    echo "Martes";
elseif ($dia == 3)
    echo "Mi&eacute;rcoles";
elseif ($dia == 4)
    echo "Jueves";
elseif ($dia == 5)
    echo "Viernes";
elseif ($dia == 6)
    echo "Sábado"; //S&aacute;bado";
else
    echo "Domingo";
echo '<br>';

//Otra forma de hacer esto....cuidado "ESPOILER"!!!
//usamos un array para seleccionar
$diasDeLaSemanaEnEspañol= ['Domigo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado'];
echo "<br><br>Los ingleses nombran al día " . ($dia)
 . " de la semana $nombreDelDia pero hoy es ";
//mostramos el elemento $dia de la lista $diasDeLaSemanaEnEspañol
echo $diasDeLaSemanaEnEspañol[$dia];

