
<?php
$carpeta = "img/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
echo "Archivo subido";
$nombre = $_FILES['foto']['name'];
echo "<img src=\"img/$nombre\">";
?>