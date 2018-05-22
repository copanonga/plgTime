<?php
/*
 * ********************************************************* 
 * package Time
 * file: plugins\content\Time
 * ********************************************************* 
 */
defined( '_JEXEC' ) or die( 'Acceso Restringido' );

class plgContentTime extends JPlugin{

    public function onContentBeforeDisplay($context, &$row, &$params, $limitstart){

		$mensaje = "</br>" . date("G:i:s") . "</br>";
		           
        return $mensaje;
        
    }   
     
}