<?php
class Basket extends Partido{
private $infracciones;
    public function __construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2,$infracciones)
    {
        parent::__construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2);
        $this->infracciones=$infracciones;
    }

public function getInfracciones()
{
return $this->infracciones;
}


public function setInfracciones($infracciones)
{
$this->infracciones = $infracciones;


}

    public function __toString()
    {
        $salida= parent::__toString();
        $salida .= "\nInfracciones: " . $this->getInfracciones();
        return $salida;
    }

    public function coeficientePartido(){
        
        parent::coeficientePartido();//?
        
        $coefPenalizacion= 0.75;
        $coef= $this->getCoefBase() - ($coefPenalizacion * $this->getInfracciones());
        return $coef;
    }

}