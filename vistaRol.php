<?php

require 'RolColector.php';
 $colector=new RolColector();
 
 ?>
 <!Doctype>
  <html>
   <head></head>
   <body>
   <?php 
           foreach($colector->read() as $dato){
		           ?>
                    
                     <tr>
                      <td> <?php echo $datos->getUr_id(); ?> </td>
                       <td> <?php echo $datos->getUr_const(); ?> </td>
					    <td> <?php echo $datos->getUr_name(); ?> </td>
                      
                     </tr>
                   <?php
            }
			
            ?>
   </body>
 </html>