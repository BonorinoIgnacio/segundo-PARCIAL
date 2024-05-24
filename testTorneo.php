<?php
include_once("Categoria.php");
include_once("Torneo.php");
include_once("Equipo.php");
include_once("Partido.php");
include_once("Fotbool.php");
include_once("Basket.php");

$catMayores = neW Categoria(1,'Mayores');
$catJuveniles = neW Categoria(2,'juveniles');
$catMenores = neW Categoria(1,'Menores');

$objE1 = neW Equipo("Equipo Uno", "Cap.Uno",1,$catMayores);
$objE2 = neW Equipo("Equipo Dos", "Cap.Dos",2,$catMayores);

$objE3 = neW Equipo("Equipo Tres", "Cap.Tres",3,$catJuveniles);
$objE4 = neW Equipo("Equipo Cuatro", "Cap.Cuatro",4,$catJuveniles);

$objE5 = neW Equipo("Equipo Cinco", "Cap.Cinco",5,$catMayores);
$objE6 = neW Equipo("Equipo Seis", "Cap.Seis",6,$catMayores);

$objE7 = neW Equipo("Equipo Siete", "Cap.Siete",7,$catJuveniles);
$objE8 = neW Equipo("Equipo Ocho", "Cap.Ocho",8,$catJuveniles);

$objE9 = neW Equipo("Equipo Nueve", "Cap.Nueve",9,$catMenores);
$objE10 = neW Equipo("Equipo Diez", "Cap.Diez",9,$catMenores);

$objE11 = neW Equipo("Equipo Once", "Cap.Once",11,$catMayores);
$objE12 = neW Equipo("Equipo Doce", "Cap.Doce",11,$catMayores);

$objPartidoB1= new Basket(11,"2024-05-05",$objE7,80,$objE8,120,7);
$objPartidoB2= new Basket(12,"2024-05-06",$objE9,81,$objE10,110,8);
$objPartidoB3= new Basket(13,"2024-05-07",$objE11,115,$objE12,185,9);

$objPartidoF1 = new Fotbool(14,"2024-05-07",$objE1,3,$objE2,2);
$objPartidoF2 = new Fotbool(15,"2024-05-08",$objE3,0,$objE4,1);
$objPartidoF3 = new Fotbool(16,"2024-05-09",$objE5,2,$objE6,3);

$objTorneo = new Torneo($colPartidos,100000);
$partido1= $objTorneo->ingresarPartido($objE5, $objE11, '2024-05-23', 'Futbol');
echo $partido1;
$partido2= $objTorneo->ingresarPartido($objE11, $objE11, '2024-05-23', 'basquetbol');
echo $partido2;
$partido3= $objTorneo->ingresarPartido($objE9, $objE10, '2024-05-25', 'basquetbol');
echo $partido3;
$salida="";
foreach($objPartido->darGanadores("basquet") as $elemento){
$salida .= $elemento."\n";
}
echo $salida;

$salida2="";
foreach($objPartido->darGanadores("futbol") as $elemento){
$salida2 .= $elemento."\n";
}
echo $salida2;

$objTorneo->calcularPremioPartido($partido1);
$objTorneo->calcularPremioPartido($partido2);
$objTorneo->calcularPremioPartido($partido3);

echo $objTorneo;

?>
