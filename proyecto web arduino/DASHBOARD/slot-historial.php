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

    $gsent = $conn->prepare('SELECT id, id_sensor, dato, fecha, hora FROM sensor_datos');

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
  <link rel="stylesheet" type="text/css" href="slot-historial.css">
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
      <br>
      <div id="reporte">
          <a href="reporteDatos.php" class="btn btn-primary btn-lg active btn btn-primary" role="button">REPORTE</a>
      </DIV>
      <div class="cont table-responsive-x1" id="cuerpo">

        <table class="table table-striped table-sm">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">id sensor</th>
              <th scope="col">Estado</th>
              <th scope="col">fecha</th>
              <th scope="col">hora</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for ($i=0; $i <$longitud; $i++) {
                $text=$res[$i]['id'];
                $text1=$res[$i]['id_sensor'];
                $text2=$res[$i]['dato'];
                $text3=$res[$i]['fecha'];
                $text4=$res[$i]['hora'];
            echo "
               <tr>
                <td>$text </td>
                <td>$text1 </td>
                <td>$text2 </td>
                <td>$text3 </td>
                <td>$text4 </td>
              </tr>";
}?>
          </tbody>
        </table>
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