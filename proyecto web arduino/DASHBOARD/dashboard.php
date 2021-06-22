<?php
  session_start();


  require_once '../database.php' ;

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Enco Software</title>
  <link rel="shortcut icon" type="image/png" href="../icontab.png">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto+Mono&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body>
	
	<?php if(!empty($user)): ?>
    <?= $user['email']; 
    	header('location: DBinicio.php');
    ?>
    <?php else: ?>
      
      <div id="cuerpo">
        <div >
          <img id="img" src="alert.png">
        </div>
        <h1>Please Login or SignUp</h1>
        
        <div id="a">
          <a href="../log in.php">Login</a> or
          <a href="../sign up.php">SignUp</a>
        </div>
        
      </div>
    	
    <?php endif; ?>
</body>
</html>