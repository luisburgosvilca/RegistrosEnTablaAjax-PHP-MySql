<?php

include_once('../Seguridad/DataCN.php');
class ManagementConnection extends DataCN{
    
    function AbrirConexion(){
        
       //$cn = mysqli_connect(DataCN::servidor, DataCN::username, DataCN::password, DataCN::db) or die('Error de conección');
       $cn = mysql_connect(DataCN::servidor, DataCN::username, DataCN::password);
        mysql_select_db(DataCN::db); 
        
        return $cn;
    }
    
    function DestruirDatos($result){
        @mysqli_free_result($result);
    }
    
    function CerrarConexion($cn){               
        @mysqli_close($cn);        
    }
    
}
?>
    

