<?php
include ('funciones.php');
echo"<br> Julián Andrés Colorado castañeda <br>";
echo"<br> Ejercicio 1 <br>";
echo"<br>Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2
variables diferentes. <br>";

$numero1=10; 
$numero2=50;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

   echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);
   echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);
   echo("<br>La multiplicacion de:".$numero1."*".$numero2."=".$multiplicacion);
   echo("<br>La division de:".$numero1."/".$numero2."=".$division);

echo"<br><br> Ejercicio 2 <br>";
echo"<br>El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal,
basado en la formula. <br>";

$peso=60;
$estatura=1.68;
$imc=$peso/($estatura*$estatura);
echo "<br>Señor usuario su estatura es de: ".$estatura." y su peso es de: ".$peso."Kg";
echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}
   elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}
   elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}
   elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}
   elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}
   else
{
    echo " <br> Obesidad 3 ";
}

echo"<br><br> Ejercicio 3 <br>";
echo"<br>Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta dependerá del
número de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de la compra; si el número de zapatos es
mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20% de descuento; y si son más 5 pares de zapatos se otorgará un 40% de
descuento. Defina la cantidad de variables que necesite, el precio de cada pare de zapatos =$150.000 y establezca el valor total de una
compra de 5 pares de zapatos. <br><br>";

$cantidadZapatosVendidos=5;
$valorporPar=150000;
$totalVenta=$cantidadZapatosVendidos*$valorporPar;
$descuento1=0.20;
/*$descuento2=0.20;
$descuento3=0.40;*/

echo "Cantidad vendida: ".$cantidadZapatosVendidos;
echo "<br>Costo Neto: ".$totalVenta;


if($cantidadZapatosVendidos<=3)
{
    $totalVenta*0.10==$descuento1;
    echo "<br>Descuento: 10%";
}
elseif($cantidadZapatosVendidos>3||$cantidadZapatosVendidos<=5)
{
    $totalVenta*0.20==$descuento1;
    echo "<br>Descuento: 20%";
}
elseif($cantidadZapatosVendidos>5)
{
    $totalVenta*0.40==$descuento1;
    echo "<br>Descuento: 40%";
}

$valorDescuento=$totalVenta*$descuento1;
$valorTotalPagar=$totalVenta-$valorDescuento;

echo "<br>Valor del descuento: ".$valorDescuento;
echo "<br>Valor total a pagar: ".$valorTotalPagar;

echo"<br><br> Ejercicio 4 <br>";
echo"<br>Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si trabaja 40 horas
o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25 por hora. Ejecute su
código para calcular el salario con 36 horas trabajadas. <br><br>";

$numerodehoras=36;
$valorhora1=20000;
$valorhora2=25000;
$sueldoSemanal=0;

if($numerodehoras<=40)
{
    $sueldoSemanal=$numerodehoras*$valorhora1;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora1;
    echo "<br>El salario devengado en la semana es de: $".$sueldoSemanal;
}
elseif($numerodehoras>40)
{
    $sueldoSemanal=$numerodehoras*$valorhora2;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora2;
}

echo"<br><br> Ejercicio 5 <br>";
echo"<br>Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar información de nombre,
teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A. Además, su programa debe estar en la capacidad de sumar
todos los salarios de los usuarios de la sucursal A en una sola variable llamada sumatoriaSalarios y así poder comparar dicho valor con las
sucursales B cuyo valor de salarios mensual es de 20.000.000 y la sucursal C cuyo valor de salarios mensuales es de 15.000.000. Permita que
su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5
usuarios de la sucursal A <br><br>";

echo "Los usuarios registrados en la sucursal A son:<br><br>";
$usuario1="Juan Perez - ";
$usuario2="Ana Gaviria - ";
$usuario3="Pedro Mesa - ";
$usuario4="Catalina Castaño - ";
$usuario5="Gabriel Rodriguez - ";

$telefono1="3224567898 - ";
$telefono2="3014569852 - ";
$telefono3="3108965474 - ";
$telefono4="3148555555 - ";
$telefono5="3001234879 - ";

$direccion1="Cll 100 sur # 35a-25 - ";
$direccion2="Cll 90 # 10-80 - ";
$direccion3="Cll 85 # 25-10 - ";
$direccion4="Cll 100 sur # 355-27 - ";
$direccion5="Cr 37 # 100-20 - ";

$salario1=3520000;
$salario2=4580000;
$salario3=1250000;
$salario4=3800000;
$salario5=6490000;

echo $usuario1.$telefono1.$direccion1." $".$salario1."<br>";
echo $usuario2.$telefono2.$direccion2." $".$salario2."<br>";
echo $usuario3.$telefono3.$direccion3." $".$salario3."<br>";
echo $usuario4.$telefono4.$direccion4." $".$salario4."<br>";
echo $usuario5.$telefono5.$direccion5." $".$salario5."<br>";

$sumatoriaSalarios= $salario1+$salario2+$salario3+$salario4+$salario5;
$salariosSucursalB=20000000;
$salariosSucursalC=15000000;
echo "<br>";

if($sumatoriaSalarios > $salariosSucursalB && $sumatoriaSalarios > $salariosSucursalC)
{
    echo "El mayor ingreso lo tiene la sucursal A";
}
elseif($salariosSucursalB > $sumatoriaSalarios && $salariosSucursalB > $salariosSucursalC)
{
    echo "El mayor ingreso lo tiene la sucursal B";
}
else 
{
    echo "El mayor ingreso lo tiene la sucursal C";
}

echo"<br><br> Ejercicio 6 <br>";
echo"<br>Almacena en un Array los 10 primeros números pares. Imprima en pantalla cada uno de estos, en una línea diferente con el siguiente
formato <br>";

$arreglo=array('1°'=>"2",'2°'=>"4",'3°'=>"6",'4°'=>"8",'5°'=>"10",'6°'=>"12",'7°'=>"14",'8°'=>"16",'9°'=>"18",'10°'=>"20" );
foreach($arreglo as $clave=>$valor)
{
echo "<br>"."El ".$clave." numero par es: ";
echo($valor);
}

echo"<br><br> Ejercicio 7 <br>";
echo"<br>Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha consulta en un
arreglo denominado salpicon, el cual presenta la siguiente configuración <br><br>";
/*
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[dulce3]=>”Lulo”*/
echo "El salpicon esta compuesto por:<br><br>";
$salpicon=array('dulce1'=>"Banano",'dulce2'=>"Manzana",'dulce3'=>"Durazno",'acido1'=>"Piña",'acido2'=>"Naranja",'acido3'=>"Lulo");
print_r($salpicon);

echo"<br><br> Ejercicio 8 <br>";
echo"<br>La federación nacional de fútbol necesita de sus servicios como desarrollador de software, para codificar una función en PHP que permita
calcular la edad de los jugadores, de acuerdo al año de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento
con los años de nacimiento 1991,1995,1987. <br><br>";

$edad=calcularEdad(1991,2020);
echo("Si nacio en 1991 su edad es : ".$edad."<br>");
$edad=calcularEdad(1995,2020);
echo("Si nacio en 1995 su edad es : ".$edad."<br>");
$edad=calcularEdad(1987,2020);
echo("Si nacio en 1987 su edad es : ".$edad);

echo"<br><br> Ejercicio 9 <br>";

echo"<br>La federación nacional de fútbol también necesita que usted codifique una nueva función para establecer el biotipo de los jugadores

teniendo en cuenta la estatura de estos. La clasificación internacional del Biotipo de futbolista es:

Estatura <1.70 m (Biotipo Bajo)<br>

1.70 m <=Estatura < 1.80 m (Biotipo Promedio)<br>

Estatura >= 1,80 m (Biotipo Superior) <br><br>";

$biotipo=calcularBiotipo(1.65);
$biotipo=calcularBiotipo(1.78);
$biotipo=calcularBiotipo(1.95);

echo"<br><br> Ejercicio 10 <br>";

echo"<br>La federación nacional de fútbol necesita de sus servicios como desarrollador de software, para codificar una función en PHP que permita

calcular la edad de los jugadores, de acuerdo al año de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento

con los años de nacimiento 1991,1995,1987. <br><br>";


$SeleccionColombia=array(

'jugador1'=>array('Jugador'=>"Radamel Falcao",'Año de Nacimiento'=>edad(1986,2020),'Posicion'=>"Delatero",'Estatura'=>Biotipo(1.77)),

'jugador2'=>array('Jugador'=>"James Rodríguez",'Año de Nacimiento'=>edad(1991,2020),'Posicion'=>"Medio Campista",'Estatura'=>Biotipo(1.81)),

'jugador3'=>array('Jugador'=>"Juan Cuadrado",'Año de Nacimiento'=>edad(1988,2020),'Posicion'=>"Delantero",'Estatura'=>Biotipo(1.78)),

'jugador4'=>array('Jugador'=>"Yerry Mina",'Año de Nacimiento'=>edad(1994,2020),'Posicion'=>"Defensor",'Estatura'=>Biotipo(1.95)),

'jugador5'=>array('Jugador'=>"David Ospina",'Año de Nacimiento'=>edad(1988,2020),'Posicion'=>"Portero",'Estatura'=>Biotipo(1.83)),

'jugador6'=>array('Jugador'=>"Davinsón Sanchez",'Año de Nacimiento'=>edad(1996,2020),'Posicion'=>"Defensor",'Estatura'=>Biotipo(1.87)),

'jugador7'=>array('Jugador'=>"Duvan Zapata",'Año de Nacimiento'=>edad(1991,2020),'Posicion'=>"Delatero",'Estatura'=>Biotipo(1.86)),

'jugador8'=>array('Jugador'=>"Wilmar Barrios",'Año de Nacimiento'=>edad(1993,2020),'Posicion'=>"Medio Campista",'Estatura'=>Biotipo(1.78)),

'jugador9'=>array('Jugador'=>"Mateus Uribe",'Año de Nacimiento'=>edad(1991,2020),'Posicion'=>"Medio Campista",'Estatura'=>Biotipo(1.80))

);

foreach($SeleccionColombia as $arregloseleccion => $arreglosjugador)

{
    echo("<br>".$arregloseleccion)."<br>";

    foreach($arreglosjugador as $claves=>$valores)

    {
        echo($valores)."<br>";
    }

}

?>