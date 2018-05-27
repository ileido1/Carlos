<?php
		$nombre= $_POST["nombre"];
		$direccion= $_POST["direccion"];
		$coreo= $_POST["email"];
		$telefono= $_POST["telefono"];
		$asunto= $_POST["asunto"];
		$requirimiento= $_POST["requirimiento"];

				$texto = "Nueva solicitud.\n";
				$texto.= $nombre .  $correo .  $telefono;
				$texto. = "\n";
				$texto = $asunto . $requirimiento;
				$destino ="soycarlosluis862@gmail.com";
				$asunto="Notificacion";
				$header="MIME-Version:1.\r\n";
				$header.="Content-type: text/html; charset= UTF-8\r\n";
				$header.="From: cl < cl@hernandez.com >\r\n";
				$exito=mail($destino, $asunto, $texto,$header);
				if ($exito){
					echo "1";	
				}	
  ?>