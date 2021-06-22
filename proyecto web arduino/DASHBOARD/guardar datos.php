<?php
	session_start();
	
	require '../database.php';

	$id=$_POST['id'];
	$user=$_POST['user'];
	$sensor=$_POST['sensor'];


	  if (!empty($_POST['user']) && !empty($_POST['user'])) {

	    $sql = "INSERT INTO sensores (id, nombre) VALUES (:id, :nombre)";

	    $stmt = $conn->prepare($sql);

	    $stmt->bindParam(':id', $id);
	    $stmt->bindParam(':nombre', $user);


	    if ($stmt->execute()) {
	      echo "\nse registro exitosamente los datos\n";

	    } else {
	      echo "\n el dispositivo ya se encuentra registrado\n";
	    }
	}

  unset($stmt);
  unset($sql);

  if (!empty($_POST['sensor'])) {


  	$sql = "INSERT INTO sensor_datos (id_sensor,dato) VALUES (:id_sensor, :dato)";


  	$stmt = $conn->prepare($sql);

  	
  	$stmt->bindParam(':id_sensor', $id);
  	$stmt->bindParam(':dato',$sensor);

  	if ($stmt->execute()) {
	      echo "\n se registro exitosamente los datos\n";
	    } else {
	      echo "\n hubo un error al registro 2\n";
	    }
	}
   unset($stmt);
 ?>