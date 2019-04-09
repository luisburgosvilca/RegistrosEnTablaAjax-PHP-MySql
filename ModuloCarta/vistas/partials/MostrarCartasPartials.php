<?php

class MostrarCartasPartials{
    
    function MostrarCartas($data){
    
        ?>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Compañía</th>
                  <th>Fecha Ingreso</th>
                  <th>Estado</th>
                  <th>N° Carta</th>
                </tr>
                </thead>
                <tbody>
        <?php 
            while($carta = mysql_fetch_array($data['cartas'])){
                ?>
                <tr>
                  <td><?php echo $carta['usuario']?></td>
                  <td><?php echo $carta['nombre']?></td>
                  <td><?php echo $carta['seguro']?></td>
                  <td><?php echo $carta['fecha']?></td>
                  <td><?php echo $carta['estado']?></td>
                  <td><?php echo $carta['carta']?></td>
                </tr>                    
                    <?php
            }
        ?>            

                
               
                <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Compañía</th>
                  <th>Fecha Ingreso</th>
                  <th>Estado</th>
                  <th>N° Carta</th>
                </tr>
                </tfoot>
              </table>            

        <?php
        
    }
}