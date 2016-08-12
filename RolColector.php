<?php
require '../../Collector.php'
class RolColector extends Collector{
	public function addRol($rol){
		return self::execQuery("INSERT INTO u_rol(ur_const, ur_name) VALUES ".$rol->getUr_const()"\',\'".$rol->getUr_name()"\'");
  
	}
	
	public function readAllRol(){
		 return self::read('u_rol','Rol'); 
	}
}