<?php 
	session_start();
	if ($_SESSION['user_id']) {

		require_once '../database.php' ;

		$records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
	    $records->bindParam(':id', $_SESSION['user_id']);
	    $records->execute();
	    $results = $records->fetch(PDO::FETCH_ASSOC);

	    $user = null;

	    if (count($results) > 0) {
	      $user = $results;
	    }
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
  <link rel="stylesheet" type="text/css" href="DBinicio.css">
</head>
<body>
	<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img src="../icontab.png" width="30" height="30" class="d-inline-block align-top" alt=""> Enco Software </div>
        <div class="list-group list-group-flush">
          <a id="dashboard" href="slot_dashboard.php" class="list-group-item list-group-item-action bg-light">Dispositivos</a>
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

      <div class="cont" id="cuerpo">
        <h1>Software para administrar dispostivos de domotica</h1>
        <p>Este software se encuentra en fase beta, en su version 0.01; la finalidad de este sistemas de gestion es darle el poder al ingeniero encargado de la instalacion de sistemas de domotica en una casa, el poder administrar los dispositivo de las diferentes casas en las cuales se encuentra su sistema.</p>
        <br>
        <p>En esta version el software solo registra sensores y los datos que estos capturen, un ejemplo es el sensor de distancia, donde registra 1 si no detecta nada 2 si lo detecta y 3 si el sensor se encuentra desconectado. </p>
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
</body>
</html>