<?php

include_once('../Seguridad/ManagementConnection.php');
class Carta extends ManagementConnection{
    
    function Registrar($data){
       
        $cn = $this->AbrirConexion();
       
            $usuario    = $data['usuario'];
            $nombre     = $data['nombre'];
            $seguro     = $data['seguro'];
            $fecha      = $data['fecha'];
            $estado     = $data['estado'];
            $carta      = $data['carta'];        

            $query = "INSERT INTO carta (usuario,nombre,seguro,fecha,estado,carta) VALUES ('$usuario','$nombre','$seguro','$fecha','$estado','$carta')";
            $result = mysql_query($query) or die('Error x1: '. mysql_errno($cn).' - '.mysql_error($cn));
            
            return $result;
            
        $this->DestruirDatos($result);
        $this->CerrarConexion($cn);
    }
    
    function ObtenerRegistros(){
        
        $cn = $this->AbrirConexion();
        
            $query = "SELECT * FROM CARTA order by fecha desc";
            $result = mysql_query($query) or die('Error x2: '.mysql_errno($cn).' - '.mysql_error($cn));
            
            return $result;
            
        $this->DestruirDatos($result);
        $this->CerrarConexion($cn);        
        
    }
    
}