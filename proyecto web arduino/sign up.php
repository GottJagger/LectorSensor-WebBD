<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se ha Registrado Exitosamente';
    } else {
      $message = 'El Usuario ya esta Resgistrado en Sistema';
    }
  }
  unset($stmt);
?>

<!DOCTYPE html>
<html>
<head>
	<script src="confirm.js" type="text/javascript"></script>
	<title>Enco Software</title>
	<link rel="shortcut icon" type="image/png" href="icontab.png">
	<link rel="stylesheet" type="text/css" href="sign up.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto+Mono&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body>
	<div id="title">
		<div class="top">
			<a href="index.php">
				<img id="logo" src="nombre de empresa.jpg">
			</a>
			<div id="social">
				<ul id="menu1">
					<li class="li2"><a href=""><img src="iconfb.png"></a></li>
					<li class="li2"><a href=""><img src="iconig.png"></a></li>
					<li class="li2"><a href=""><img src="icongm.png"></a></li>
				</ul>
			</div>	
		</div>
		
		<div>
			<ul id="menu">
			<li class="li1"><a  href="index.php">Inicio</a></li>
			<li class="li1"><a  href="software.php">Software</a></li>
			<li class="li1"><a  href="help.php">Help</a></li>
			<li style="float: right" class="li1"><a class="active" href="log in.php">Log In</a></li>

			</ul>
		</div>
	</div>

	<div id="body">
		<br>

		<label id="top">
			<span id="topspan">SIGN UP</span>
			<span id="topspan">o <a href="log in.php">Login</a></span>

		</label>
		<div id="cuerpo">
			<div id="mensaje">
				<?php if(!empty($message)): ?>
	      		<p> <?= $message ?></p>

	   			<?php

	   				endif; 
	   			?>
			</div>
			<img src="icontab.png" id="logim">
			<form action="sign up.php" method="post">

  				<div class="container">
    				<label for="uname"><b>Correo</b></label>
    				<input type="email" placeholder="Enter Email" name="email" required>

    				<label  for="psw"><b>Contraseña</b></label>

    				<input oninput ="tomavalor()" type="password" placeholder="Enter Password" name="password" required id="pass">

    				<label for="psw">
    					<b>Confirma</b>
    				</label>

    				<input oninput="tomavalor()" type="password" placeholder="Confirm Password" name="password" required id="cpass">	
        
    				<button onmousemove="cambio()"  id="boton"  type="submit">Sign up</button>

    				<label>
      					<input  type="checkbox" checked="checked" name="remember"> Recordarme
    				</label>
  				</div>
			</form>
		</div>
		<br>

	</div>

	<div id="footer">
		<div class="foot">
			<a href="index.html">
				<img  src="icontab.png">
			</a>
		</div>
		<div class="foot">
			
			<h3>sobre nosotros</h3>
			<p id="footp">somos una pequeña empresa dependiente de Enco con el fin de proveer software para la misma.</p>

		</div>
		<div class="foot" style="padding-left: 20%">
			<h3>informacion</h3>
			<ul id="fooul">
				<li>blog</li>
				<br>
				<li>testimonios</li>
				<br>
				<li>eventos</li>
			</ul>
		</div>
		<br>
	</div>
</body>
</html>