<?php
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

$numerodehoras=38;
$valorhora1=20000;
$valorhora2=25000;
$sueldoSemanal=0;

if($numerodehoras<=40)
{
    $sueldoSemanal=$numerodehoras*$valorhora1;
    echo "Total de: ".$numerodehoras." Horas, se obtiene un valor de: $".$valorhora1;
    echo "<br>El salario semanal es de: $".$sueldoSemanal;
}
elseif($numerodehoras>40)
{
    $sueldoSemanal=$numerodehoras*$valorhora2;
    echo "Total de: ".$numerodehoras." Horas, se obtiene un valor de: $".$valorhora2;
}




?>