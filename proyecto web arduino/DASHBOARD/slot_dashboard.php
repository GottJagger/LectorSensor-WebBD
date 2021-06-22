<?php 
	session_start();
	if ($_SESSION['user_id']) {

		require '../database.php' ;

		$records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
	    $records->bindParam(':id', $_SESSION['user_id']);
	    $records->execute();
	    $results = $records->fetch(PDO::FETCH_ASSOC);

	    $user = null;

	    if (count($results) > 0) {
	      $user = $results;
	    }


      $stmt = $conn->prepare('SELECT id, nombre FROM sensores');

      $stmt->execute();
      $results = $stmt->fetch(PDO::FETCH_ASSOC);


      $dato = null;
      $dato = $results;


      $gsent = $conn->prepare("SELECT id, nombre FROM sensores");
      $gsent->execute();

      $res = $gsent->fetchAll();
      $longitud=count($res);

	}else{
		header('location: dashboard.php');
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Home | Enco Software</title>
	<link rel="shortcut icon" type="image/png" href="../icontab.png">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto+Mono&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

	<link href="sb-admin-2.min.css" rel="stylesheet">
	<link href="dash/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slot_dashboard.css">
</head>
<body>
	<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img src="../icontab.png" width="30" height="30" class="d-inline-block align-top" alt=""> Enco Software </div>
        <div id="d" class="list-group list-group-flush">
          <a id="dashboard" href="#" class="list-group-item list-group-item-action bg-light">Dispositivos</a>
          <a id="Registro" href="#" class="list-group-item list-group-item-action bg-light">Resgistro</a>
          <a id="historial" href="slot-historial.php" class="list-group-item list-group-item-action bg-light">Historial</a>
        </div>
      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="DBinicio.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if(!empty($user)): ?>
                	<?= $user['email']?>
                	<?php endif; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div id="body" class="cont">
      	<br>
        
        <?php 
        for ($i=0; $i <$longitud; $i++) { 
          $text=$res[$i]['nombre'];
          $text1=$res[$i]['id'];
          echo "<div id='cuerpo'>";
          if ($text=="Sistema de luces") {
            echo "
                    <h1> $text </h1>
                    <p>SERIAL CODE: $text1</p>";
                    echo "<a id='boton1' href='' class='btn btn-success'>ON</a>
                          <a id='boton2' href='' class='btn btn-danger'>OFF</a>";
                echo "<article id='contenido'>
                    
                </article>";
          }else{
            echo "<h1> $text </h1>";
            echo "<p>SERIAL CODE: $text1</p>";
          }

          

          echo "</div>"; 
        }
        ?>

        <br>
      </div>
      
    </div>
  </div>
 

  <!-- Bootstrap core JavaScript -->
  <script src="dash/jquery/jquery.min.js"></script>
  <script src="dash/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script src="refresh.js" type="text/javascript"></script>
</body>
</html>