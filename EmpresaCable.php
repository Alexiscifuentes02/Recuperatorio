<?php

class EmpresaCable{
    private $colPlanes;
    private $colContratos;


    public function __construct($colPlanes,$colContratos){
        $this->colPlanes = $colPlanes;
        $this->colContratos = $colContratos;
    }


    public function getArrayPlanes(){
        return $this->colPlanes;
    }

    public function getArrayContratos(){
        return $this->colContratos;
    }


    public function setArrayPlanes($colPlanes){
         $this->colPlanes= $colPlanes;
    }

    public function setArrayContratos($colContratos){
         $this->colContratos= $colContratos;
    }


    // Metodo toString
    public function __toString(){
        $cadena = "Plan: ".$this->mostrarPlanes()."\n";
        $cadena = $cadena. "Contrato: ".$this->mostrarContratos()."\n";
        return $cadena;
    }


    public function mostrarPlanes(){
        $planes = $this->getArrayPlanes();
        $cadena = "";
        for($i=0;$i<count($planes);$i++){
            $unPlan = $planes[$i];
            $cadena = $cadena . $unPlan . "\n";
        }
        return $cadena;
    }

    public function mostrarContratos(){
        $contratos = $this->getArrayContratos();
        $cadena = "";
        for($i=0;$i<count($contratos);$i++){
            $unContrato = $contratos[$i];
            $cadena = $cadena . $unContrato . "\n";
        }
        return $cadena;
    }


    public function incorporarPlan($objPlan){
        $planes = $this->getArrayPlanes();
        for($i=0;$i<count($planes);$i++){
            $unPlan = $planes[$i];
            $canales = $unPlan->getColCanales();
            for($j=0;$j<count($canales);$j++){
                $unCanal = $canales[$j];
                if($unCanal <> $objPlan->getColCanales()[$j] && $unPlan->getIncluyeMG() <> $objPlan->getIncluyeMG()){
                    $nArreglo = array_push($planes,$objPlan);
                    $this->setArrayPlanes($nArreglo);
                }
            }
        }    
    }


    public function incorporarContrato($objPlan,$objCliente,$fechaDesde,$fechaVenc,$esViaWeb){
        $contrato = null;
        $renueva = true;
        $costo = 1000;
        if($esViaWeb){
            $contrato = new ContratoWeb($fechaDesde,$fechaVenc,$objPlan,$costo,$renueva,$objCliente);
           
        }
        return $contrato;
    }

    public function retornarImporteContratos($codigoPlan){
        $contratos = $this->getArrayContratos();
        for($i=0;$i<count($contratos);$i++){
            $unContrato = $contratos[$i];

    }

    public function pagarContrato($objContrato){
        $estado = $objContrato->actualizarEstadoContrato();
        if($estado == "AL DIA"){

        }elseif($estado == "MOROSO"){

        }else{

        }
    }










}

?>