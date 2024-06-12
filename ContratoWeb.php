<?php 
class ContratoWeb extends Contrato{
    private $porcentajeDescuento;

    public function __construct($fechaInicio, $fechaVencimiento, $objPlan,$costo,$seRennueva,$objCliente){
        parent::__construct($fechaInicio, $fechaVencimiento, $objPlan,$costo,$seRennueva,$objCliente);
        $this->porcentajeDescuento = 10;
    }

    public function getPorcentaje(){
        return $this->porcentajeDescuento;
    }

    public function setPorcentaje($desecuento){
        $this->porcentajeDescuento = $desecuento;
    }

    public function __toString(){
        $cadena = parent::__toString();
        return $cadena. " Porcentaje: " .$this->getPorcentaje()."\n";
    }

    public function calcularCosto(){
        $objPlan = $this->getObjPlan();
        $costoF = $objPlan->getImporte() * ($this->getPorcentaje() / 100);
        return $costoF;
    }



}