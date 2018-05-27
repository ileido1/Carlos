<?php
 //localhost
 $db_host="localhost";
 $db_nombre="pagina_cl";
 $db_usuario="root";
 $db_pass="";

//servidor
//$db_host="localhost";
//$db_nombre="aspirati_bd_website";
//$db_usuario="aspirati_usurio";
//$db_pass="Caracas2017!";

$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
if (mysqli_connect_errno()) {
echo "fallo en la conexion";
exit();
};
		$nombre= $_POST["nombre"];
		$direccion= $_POST["direccion"];
		$coreo= $_POST["email"];
		$telefono= $_POST["telefono"];
		$asunto= $_POST["asunto"];
		$requirimiento= $_POST["requirimiento"];

		$sql ="INSERT INTO `clientes`(`nombre`, `email`, `pais_ciudad`, `telefono`, `asunto`, `requirimiento`) VALUES ('".$nombre."','".$coreo."','".$direccion."', '".$telefono."', '".$asunto."','".$requirimiento."')";
		$resultado = mysqli_query($conexion,$sql);
				if ($resultado){
					echo "1";	
				}else{
					echo"3";
				}	
  ?>