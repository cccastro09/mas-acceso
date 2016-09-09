
<?php
 	session_start();
  require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

?>
<?php
 if (isset($_SESSION['token'])){
	session_destroy();
	echo "se ha destruido sesion exitosamente <br/>";
  echo "<meta http-equiv='Refresh' content='0;/'>";

}else{
	echo "Error....<br/>";
	echo "<meta http-equiv='Refresh' content='0;/login/'>";
}
?>
