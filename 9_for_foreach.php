<?php
/*
//-----------------------------------------------------------------
echo" 1 ----  for    ----------------------------<br>";
//-----------------------------------------------------------------
//for (expr1; expr2; expr3)
//    sentencia
//
//mostra los 10 primeros números enteros
for ($n = 0; $n < 10; $n++) {
    echo " $n";
}
// expre1 -> $n = 0, se evalua una sola vez, la primera
// expre2 -> $n < 10 , se evalua cada vez que se ejecuta sentencia, 
//                      si false se sale del bucle
// expre3 -> $n++ , se evalua cada vez que ejecuta sentencia

//PARA HACER EN CLASE
#mostrar los 100 primeros numeros pares (0 al 198)

------------- GENERADOR DE CLAVES 
//generar una clave de entre 8 y 15 caracteres
//
#$clave va a ir almacenando los caracteres
$clave = '';
#generamos un número al azar para saber cuantos caracteres hay que meter
$numeroTotalDeCaracteres = rand(8, 15);
//lanzamos un bucle para ir generando cada caracter
//
for ($i = 0; $i < $numeroTotalDeCaracteres; $i++) {
    //generamos el código ASCII al azar (ver una tabla ASCII)
    $numeroDeCaracterAlAzar = rand(32, 127);
    //convertimos el código en un caracter con chr()
    $caracter = chr($numeroDeCaracterAlAzar);
    //lo concatenamos a $clave
    $clave = $clave . $caracter;
}
echo "<br>tu clave es <h1>$clave</h1><br>";

//PARA HACER EN CLASE
#restringir la clave sólo a letras y números...
 
 */

//-----------------------------------------------------------------
echo" 2 ----  foreach    ----------------------------<br>";
//-----------------------------------------------------------------
#hacer un pedido de frutas al azar
$cestaFrutas=['Peras','Limones','Cerezas','Naranjas','Uvas'];
foreach ($cestaFrutas as $fruta) {
    echo "dame ".rand(0,5)." kilos de $fruta <br>";   
}

/*
//array (clave=>valor) ... codigo => nombre
$profesorado = array('FHP' => 'FERNANDEZ HERRAIZ, PILAR',
    'FOJ' => 'FERNANDEZ ORTEGA, JAIME',
    'GCM' => 'GONZÁLEZ CAMPOY MARÍA ÁNGELES',
    'MAF' => 'MARTÍN ÁLVAREZ, FRANCISCO',
    'MRC' => 'MARTIN RUIZ, CARLOS',
    'MMV' => 'MONTERO MALAGÓN, VÍCTOR MANUEL',
    'MGMA' => 'MORENO GARRIDO, MIGUEL ÁNGEL',
    'PSA' => 'PLEGUEZUELOS SIERRA, AURORA',
    'SBM' => 'SIERRA BIEDMA, MERCEDES');

var_dump($profesorado);
echo '<br>---- con print_r <br>';
print_r($profesorado);

//FORMATO 1 de foreach
//foreach (expresión_array as $valor)
//  sentencias
//sólo se usa el valor, en este caso el nombre

echo "<br><h3>listado de profesorado</h3> <br>";
foreach ($profesorado as $nombre) {
    echo "$nombre<br>";
}

//FORMATO 2 de foreach
//foreach (expresión_array as $clave => $valor)
//    sentencias
//se usa la clave y el valor, en este caso el codigo y el nombre

echo "<br><h3>listado de profesorado con su código</h3><br>";
foreach ($profesorado as $codigo => $nombre) {
    echo "el/la profesor/a $nombre tiene el código $codigo<br>";  
}
*/
//-----------------------------------------------------------------
echo" 3 ----  break    ----------------------------<br>";
//-----------------------------------------------------------------
#hacer un pedido de frutas al azar pero con un máximo de kilos
$cestaFrutas=['Peras','Limones','Cerezas','Naranjas','Uvas','Manzanas'];
$totalKilos=0;
$maximoKilos=10;
foreach ($cestaFrutas as $fruta) {
    //generamos los kilos de una fruta
    $kilos=rand(0,5);
    //los sumamos a los que llevamos
    $totalKilos=$totalKilos+$kilos;
    //si nos pasamos se acabó la compra!!
    if ($totalKilos>$maximoKilos){
        break;
    }
    //pedimos al tendero/a
    echo "dame $kilos kilos de $fruta <br>";   
}

//-----------------------------------------------------------------
echo" 4 ----  continue    ----------------------------<br>";
//-----------------------------------------------------------------
#hacer un pedido de frutas al azar pero sin decir la frase
#dame 0 kilos de "algo"... por dios!
foreach ($cestaFrutas as $fruta) {
    //generamos los kilos de una fruta
    $kilos=rand(0,5);
    //si salen 0 kilos, nos saltamos la petición!!
    if ($kilos==0){
        continue;
    }
    //pedimos al tendero/a
    echo "dame $kilos kilos de $fruta <br>";   
}

//hacer en clase...c9_pedidoFrutas.php combinar los dós últimos códigos y que
// salga el total de frutas
//hacer en clase...c9_pedidoFrutasPrecio.php  usar un array asociativo con clave "nombre de la fruta" y
// valor el precio... del tipo "Peras"=>2.15, "Limones"=>0.80 ...
//hacer la compra al azar pero que salga el ticket, con el precio individual 
//y los totales de kilos y euros.

