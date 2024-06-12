<?php
    class ContratoEmpresa extends Contrato{
        private $importeFinal;
    
        public function __construct($fechaInicio, $fechaVencimiento, $objPlan,$costo,$seRennueva,$objCliente,$importe){
            parent::__construct($fechaInicio, $fechaVencimiento, $objPlan,$costo,$seRennueva,$objCliente);
            $this->importeFinal = $importe; 
        }
        
        public function getImporteFinal(){
            return $this->importeFinal;
        }
    
        public function setImporteFinal($importe){
            $this->importeFinal = $importe;
        }

        public function __toString(){
            $cadena = parent::__toString();
            return $cadena. " Importe Final: " .$this->getImporteFinal()."\n";
        }
    
    
        public function calcularCosto(){
            $total = 0;
            $objPlan = $this->getObjPlan();
            $canales = $objPlan->getColCanales();
            for($i=0;$i<count($canales);$i++){
                $objCanal = $canales[$i];
                $total =  $total + $objCanal->getImporte();
            }
            $costoF = $objPlan->getImporte() + $total;
            return $costoF;
       }
       
        
    
    }