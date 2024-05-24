<?php
class Torneo
{

    private $colPartidos;
    private $importe;

    public function __construct($colPartidos, $importe)
    {
        $this->colPartidos = $colPartidos;
        $this->importe = $importe;
    }

    //--------------------------------------------- Get
    public function getColPartidos()
    {
        return $this->colPartidos;
    }
    public function getImporte()
    {
        return $this->importe;
    }
    //--------------------------------------------- Set
    public function setColPartidos($colPartidos)
    {
        $this->colPartidos = $colPartidos;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    //--------------------------------------------- __toString
    public function __toString()
    {
        $partidos = " ";
        foreach ($this->getColPartidos() as $partido) {
            $partidos .= $partido . "\n";
        }
        $salida =
            "\nPartidos: " . $partidos
            . "\nImporte: " . $this->getImporte();
        return $salida;
    }
    public function ingresarPartido($ObjEquipo1, $ObjEquipo2, $fecha, $tipoPartido)
    {
        $partidos = $this->getColPartidos();
        $mismaCantJugadores = false;
        $mismaCategoria = false;

        if ($ObjEquipo1->getCantJugadores() == $ObjEquipo2->getCantJugadores()) {
            $mismaCantJugadores = true;
        }
        if ($ObjEquipo1->getObjCategoria() == $ObjEquipo2->getObjCategoria()) {
            $mismaCategoria = true;
        }
        if ($mismaCantJugadores && $mismaCategoria) {
            $objPartido = new Partido(0, $fecha, $ObjEquipo1, 0, $ObjEquipo2, 0);

            array_push($partidos, $objPartido);
            $this->setColPartidos($partidos);
        }
        return $objPartido;
    }
    public function darGanadores($deporte)
    {
        $colGanadores = [];
        $partidos = $this->getColPartidos();
        foreach ($partidos as $elemento) {
            if (is_a($elemento, $deporte)) {

                $equipoGanador = $elemento->darEquipoGanador();
                array_push($colGanadores, $equipoGanador);
            }
        }
        return $colGanadores;
    }

    public function calcularPremioPartido($objPartido){
        $premio= $objPartido->coeficientePartido() * $this->getImporte();
        $array= ["equipo ganador"=>$objPartido->darEquipoGanador(),
                "Premio Partido"=>$premio];
return $array;

    }
}
