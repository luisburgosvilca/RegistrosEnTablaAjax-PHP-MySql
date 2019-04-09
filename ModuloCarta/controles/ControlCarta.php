<?php

class ControlCarta{
    
    public function RegistrarCarta(){
        
        include_once('../ModuloCarta/entidades/Carta.php');
        $cartaEntity = new Carta();
        
            $data['usuario']    = $_POST['usuario'];
            $data['nombre']     = $_POST['nombre'];
            $data['seguro']     = $_POST['seguro'];
            $data['fecha']      = $_POST['fecha'];
            $data['estado']     = $_POST['estado'];
            $data['carta']      = $_POST['carta'];   
        
        if($cartaEntity->Registrar($data)){
            
             $this->MostrarRegistros();
            

        }else{
            echo "Error al registrar";
        }
        
    }
    
    public function MostrarRegistros(){

        include_once('../ModuloCarta/entidades/Carta.php');
        $cartaEntity = new Carta();   
        
        $data['cartas'] = $cartaEntity->ObtenerRegistros();

        include_once('../ModuloCarta/vistas/partials/MostrarCartasPartials.php');
        $MostrarCartasPartials = new MostrarCartasPartials();
        $MostrarCartasPartials ->MostrarCartas($data);

    }
    
}