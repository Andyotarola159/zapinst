<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<?php 

 
if (isset($_POST["enviar"])) {


$db_host="localhost";
$db_nombre="zapinst";
$db_usuario="root";
$db_contra="";

$usu_email=$_POST["email"];

$usu_contra=$_POST["contra"];

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

mysqli_set_charset($conexion,"utf8");

$consulta="SELECT * FROM datosusuarios WHERE EMAIL='$usu_email'";
$consulta="SELECT * FROM datosusuarios WHERE CONTRASEÑA='$usu_contra'";

$resultado=mysqli_query($conexion,$consulta);



#while ($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {

	$fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC);

		if ($fila["EMAIL"]==$usu_email AND $fila["CONTRASEÑA"]==$usu_contra){

			echo "<p class='row usuario'>Bienvenido " . $fila["EMAIL"] ."</p>";
			
			include("usuarios.php");
					}
		else{
			echo "INGRESE BIEN SU CONTRASEÑA O EMAIL";

		}		
#}
mysqli_close($conexion);

}


 ?>
</body>
</html>