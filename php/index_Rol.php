

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-yw4l{vertical-align:top}
</style>

</head>
<body>
    

<table class="tg">
  <tr>
    <th class="tg-yw4l">Id</th>
    <th class="tg-yw4l">Rol</th>
  </tr>
<?php    
require 'rolCollector.php';
foreach ($rol as &$Rol) {
echo "<tr><td>".$rol->id."</td><td>".$rol->descripcion_rol."</td>";
echo "<td>Edit</td><td>Delete</td></tr>";
}?>


    </table>
    
</body>

</html>