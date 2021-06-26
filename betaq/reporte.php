<?php
require_once "modelos/conexion.php";
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=nombre_del_archivo.xls");
header("Pragma: no-cache");
header("Expires: 0");
$stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios");
$stmt->execute();
$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<pre>
<?php print_r($datos); ?>
</pre>