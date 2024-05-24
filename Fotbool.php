<?php
class Fotbool extends Partido{

    public function __construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2)
    {
        parent::__construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2);
    }

    public function __toString()
    {
        $salida= parent::__toString();
        return $salida;
    }
    public function coeficientePartido(){

        parent::coeficientePartido();

        if($this->getObjEquipo1()->getObjCategoria()=="menores"){
            $this->setCoefBase(0.13);
        }
        if($this->getObjEquipo1()->getObjCategoria()=="juveniles"){
            $this->setCoefBase(0.19);
        }
        if($this->getObjEquipo1()->getObjCategoria()=="mayores"){
            $this->setCoefBase(0.27);
        }

    }
}