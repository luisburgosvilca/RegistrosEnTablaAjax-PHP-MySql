<?php

if(isset($_REQUEST['registrar_letter'])){
    //echo "bien";
    include_once('../ModuloCarta/controles/ControlCarta.php');
    $ControlCarta = new ControlCarta();
    $ControlCarta -> RegistrarCarta();
    
}
elseif(isset($_REQUEST['action'])){
    include_once('../ModuloCarta/controles/ControlCarta.php');
    $ControlCarta = new ControlCarta();
    $ControlCarta ->MostrarRegistros();
    
}
else{
    echo "algo sucedió";
}